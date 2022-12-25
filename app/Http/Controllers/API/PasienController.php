<?php

namespace App\Http\Controllers\API;

use DateTime;
use Exception;
use Carbon\Carbon;
use App\Models\Pasien;
use App\Models\Pasiens;
use App\Helpers\Perhitungan;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\MasterPasiens;
use App\Models\Medis;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PasienController extends Controller
{
    public function registerPasien(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nama_balita' => ['required', 'string', 'max:255'],
                'nik_balita' => ['required', 'string', 'max:255', 'unique:pasiens'],
                'tanggal_lahir' => ['required'],
                'alamat' => ['required', 'string', 'max:255'],
                'jenis_kelamin' => ['required', 'string', 'max:255'],
                'golongan_darah' => ['required', 'string', 'max:255'],
                'berat_badan_lahir_bayi' => ['required'],
                'kms' => ['required'],
                'asuransi_kesehatan' => ['required'],
                'nama_bapak' => ['required', 'string', 'max:255'],
                'nik_bapak' => ['required', 'string', 'max:255'],
                'nama_ibu' => ['required', 'string', 'max:255'],
                'nik_ibu' => ['required', 'string', 'max:255'],
                'nomor_telepon' => ['required', 'string', 'max:255'],
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }
            // $input = $request->all();

            // $post = Pasiens::create($input);

            $data = new Pasiens;
            $data->nama_balita = $request->nama_balita;
            $data->nik_balita = $request->nik_balita;
            $data->tanggal_lahir = $request->tanggal_lahir;
            $data->jenis_kelamin = $request->jenis_kelamin;
            $data->alamat = $request->alamat;
            $data->desa = Auth::user()->desa;
            $data->rw = Auth::user()->rw;
            $data->golongan_darah = $request->golongan_darah;
            $data->berat_badan_lahir_bayi = $request->berat_badan_lahir_bayi;
            $data->kms = $request->kms;
            $data->asuransi_kesehatan = $request->asuransi_kesehatan;
            $data->nama_bapak = $request->nama_bapak;
            $data->nik_bapak = $request->nik_bapak;
            $data->nama_ibu = $request->nama_ibu;
            $data->nik_ibu = $request->nik_ibu;
            $data->nomor_telepon = $request->nomor_telepon;
            $data->save();
            return ResponseFormatter::success([
                'token_type' => 'Bearer',
                'data' => $data,
            ], 'Registrasi Pasien Success');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error
            ], 'Registrasi Pasien Gagal', 500);
        }
    }

    public function perhitunganPasien(Request $request, $id)
    {

        try {
            $validator = Validator::make($request->all(), [
                'berat_badan' => ['required', 'numeric'],
                'tinggi_badan' => ['required', 'numeric'],
                'lingkar_kepala' => ['required', 'numeric'],
                'lingkar_lengan_atas' => ['required', 'numeric'],
                'asi_eksklusif' => ['required', 'boolean'],

            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $data = Pasiens::findOrFail($id);
            $data->berat_badan = $request->berat_badan; //gram
            $data->tinggi_badan = $request->tinggi_badan; //cm
            $data->lingkar_kepala = $request->lingkar_kepala; //cm
            $data->lingkar_lengan_atas = $request->lingkar_lengan_atas; //cm
            $data->asi_eksklusif = $request->asi_eksklusif;
            $posisi = $request->posisi; //0 telentang  1 berdiri
            $data->tanggal_pengukuran = \Carbon\Carbon::now();
            $data->usia_saat_ukur =  \Carbon\Carbon::parse($data->tanggal_lahir)
                ->diff(\Carbon\Carbon::now())
                ->format('%y tahun - %m bulan - %d hari');


            //Mendapatkan umur berdasarkan BULAN
            $tanggal = new DateTime($data->tanggal_lahir);
            $diff = $tanggal->diff(new DateTime());
            $bulan = $diff->format('%m') + 12 * $diff->format('%y');



            //convert Gram ke KG
            $beratBadanKG = $request->berat_badan / 1000;

            //Convert CM ke Meter
            $convertMeter = $request->tinggi_badan / 100;

            if ($data->jenis_kelamin == "Laki-Laki") {
                $data->BB_U = Perhitungan::beratBadanLakiLaki($beratBadanKG, $bulan, $data->BB_U);
            } else if ($data->jenis_kelamin == "Perempuan") {
                $data->BB_U = Perhitungan::beratBadanPerempuan($beratBadanKG, $bulan, $data->BB_U);
            }
            //Perkondisian telentang atau berdiri
            if ($bulan >= 20 &&  $bulan <= 36) {
                if ($bulan < 24 &&  $posisi == 1) {
                    $value_hitung_TBMU = $request->tinggi_badan - 0.7;
                } else if ($bulan > 24 && $posisi == 0) {
                    $value_hitung_TBMU = $request->tinggi_badan + 0.7;
                } else {
                    $value_hitung_TBMU = $request->tinggi_badan;
                }
            } else {
                $value_hitung_TBMU = $request->tinggi_badan;
            }

            if ($data->jenis_kelamin == "Laki-Laki") {
                $data->TB_U = Perhitungan::TinggiBadanmenurutUmurLakiLaki($value_hitung_TBMU, $bulan, $data->TB_U, $posisi);
            } else if ($data->jenis_kelamin == "Perempuan") {
                $data->TB_U = Perhitungan::TinggiBadanmenurutUmurPerempuan($value_hitung_TBMU, $bulan, $data->TB_U, $posisi);
            }


            $imt = $beratBadanKG / $convertMeter ** 2;



            //Indeks Massa Tubuh Menurut Umur BULAN
            if ($bulan >= 20 &&  $bulan <= 36) {
                if ($bulan < 24 &&  $posisi == 1) {
                    $value_IMT_Bulan = $imt - 0.7;
                } else if ($bulan > 24 && $posisi == 0) {
                    $value_IMT_Bulan = $imt + 0.7;
                } else {
                    $value_IMT_Bulan = $imt;
                }
            } else {
                $value_IMT_Bulan = $imt;
            }

            if ($data->jenis_kelamin == "Laki-Laki") {
                $data->IMT_U_B = Perhitungan::IndeksMassaTubuhMenurutUmurBulanLakiLaki($value_IMT_Bulan, $bulan, $data->IMT_U_B, $posisi);
            } else if ($data->jenis_kelamin == "Perempuan") {
                $data->IMT_U_B = Perhitungan::IndeksMassaTubuhMenurutUmurBulanPerempuan($value_IMT_Bulan, $bulan, $data->TB_U, $posisi);
            }

            //mendapatkan umur berdasarkan Tahun
            $umurTahun = \Carbon\Carbon::parse($data->tanggal_lahir)
                ->diff(\Carbon\Carbon::now())
                ->format('%y');


            if ($data->jenis_kelamin == "Laki-Laki") {
                $data->IMT_U_T = Perhitungan::IndeksMassaTubuhMenurutUmurTahunLakiLaki($imt, $bulan, $data->IMT_U_B, $umurTahun);
            } else if ($data->jenis_kelamin == "Perempuan") {
                $data->IMT_U_T = Perhitungan::IndeksMassaTubuhMenurutUmurTahunPerempuan($imt, $bulan, $data->TB_U, $umurTahun);
            }


            $data->IMT_U_T_Hasil = round($imt, 1);
            $data->IMT_U_B_Hasil = round($value_IMT_Bulan, 1);
            $data->update();

            $update = new MasterPasiens;
            $update->id_pasien = $id;
            $update->berat_badan = $request->berat_badan; //gram
            $update->tinggi_badan = $request->tinggi_badan; //cm
            $update->lingkar_kepala = $request->lingkar_kepala; //cm
            $update->lingkar_lengan_atas = $request->lingkar_lengan_atas; //cm
            $update->asi_eksklusif = $request->asi_eksklusif;
            $update->tanggal_pengukuran = \Carbon\Carbon::now();
            $update->usia_saat_ukur = \Carbon\Carbon::parse($data->tanggal_lahir)
                ->diff(\Carbon\Carbon::now())
                ->format('%y tahun - %m bulan - %d hari');
            $update->BB_U = $data->BB_U;
            $update->TB_U = $data->TB_U;
            $update->IMT_U_B = $data->IMT_U_B;
            $update->IMT_U_T = $data->IMT_U_T;
            $update->IMT_U_T_Hasil = round($imt, 1);
            $update->IMT_U_B_Hasil = round($value_IMT_Bulan, 1);
            $update->save();
            return ResponseFormatter::success([
                'token_type' => 'Bearer',
                // 'testing' => "Tahun : ". $umurTahun. " Bulan : ". $bulan. " Berat Badan KG : ". $beratBadanKG. " IMT : ". $imt. " IMT Bulan : ". $value_IMT_Bulan,
                'data' => $data,
            ], 'Pengukuran Pasien Success');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error
            ], ' Pengukuran Gagal', 500);
        }
    }

    public function medisPasien(Request $request, $id)
    {

        try {
            $data = new Medis;

            $data->vitamin_a = $request->vitamin_a;
            $data->oralit = $request->oralit;
            $data->campak = $request->campak;
            $data->dpt = $request->dpt;
            $data->polio = $request->polio;
            $data->bcg = $request->bcg;
            $data->hb = $request->hb;
            $data->obat_cacing = $request->obat_cacing;
            $data->tanggal_pemberian = Carbon::now();
            $data->id_pasien = $id;

            $pasien = Pasiens::findOrFail($id);

            $pasien->vitamin_a = $request->vitamin_a;
            $pasien->oralit = $request->oralit;
            $pasien->campak = $request->campak;
            $pasien->dpt = $request->dpt;
            $pasien->polio = $request->polio;
            $pasien->bcg = $request->bcg;
            $pasien->hb = $request->hb;
            $pasien->tanggal_pemberian = Carbon::now();

            $pasien->obat_cacing = $request->obat_cacing;


            $pasien->update();
            $data->save();
            return ResponseFormatter::success([
                'token_type' => 'Bearer',
                'data' => $data,
            ], 'Pengukuran Pasien Success');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error
            ], 'Pengukuran Gagal', 500);
        }
    }


    

    public function getPasienByID(Request $request, $id)
    {
        try {
            $data = Pasiens::where('id', $id)->first();
            return ResponseFormatter::success([
                'token_type' => 'Bearer',
                'data' => $data,
            ], 'Get Data Pasien berhasil');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error
            ], 'Get Data Pasien Gagal', 500);
        }
    }

    public function updatePasien(Request $request, $id)
    {

        try {
            $data = Pasiens::find($id);
            $data->update($request->all());
            return ResponseFormatter::success([
                'token_type' => 'Bearer',
                'data' => $data,
            ], 'Update Data Pasien berhasil');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error
            ], 'Update Data Pasien Gagal', 500);
        }
    }

    public function getAllPasien(Request $request)
    {
        try {
            // if ($request->has('month')) {
            //     $month = $request->input('month');
            //     $data = Pasiens::whereRaw('MONTH(tanggal_pemberian) = ' . $month)->paginate(5);
            // }

          
                $search = $request->input('search');
                $data = Pasiens::Where('nama_balita', 'like', "%{$search}%")->OrWhereMonth('tanggal_pemberian',$request->input('month'))
                        ->OrWhereYear('tanggal_pemberian',$request->input('year'))
                        ->get();
            

            // if ($request->has('year')) {
            //     $year = $request->input('year');
            //     $data = Pasiens::whereRaw('YEAR(tanggal_pemberian) = ' . $year)->get();
            // }
           
            return ResponseFormatter::success([
                'token_type' => 'Bearer',
                'data' => $data,
            ], 'Get Data Pasien berhasil');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error
            ], ' Get Data Pasien Gagal', 500);
        }
    }
    public function searchPasien(Request $request)
    {
        try {
            $data = $request->get('data');

            $pasien = Pasiens::where('nama_balita', 'like', "%{$data}%")->get();
            return ResponseFormatter::success([
                'token_type' => 'Bearer',
                'data' => $pasien,
            ], 'Update Data Pasien berhasil');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error
            ], 'Update Data Pasien Gagal', 500);
        }
    }

    public function filterMedisBulanPasien(Request $request)
    {
        try {
            $data = $request->get('month');
            if ($request->has('month')) {
                $month = $request->input('month');
                $pasien = Pasiens::whereRaw('MONTH(tanggal_pemberian) = ' . $month)->get();
            }

            return ResponseFormatter::success([
                'token_type' => 'Bearer',
                'data' => $pasien,
            ], 'Get Data Pasien berhasil');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error
            ], 'Get Data Pasien Gagal', 500);
        }
    }

    public function filterMedisTahunPasien(Request $request)
    {
        try {
            if ($request->has('year')) {
                $year = $request->input('year');
                $pasien = Pasiens::whereRaw('YEAR(tanggal_pemberian) = ' . $year)->get();
            }

            return ResponseFormatter::success([
                'token_type' => 'Bearer',
                'data' => $pasien,
            ], 'Get Data Pasien berhasil');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error
            ], 'Get Data Pasien Gagal', 500);
        }
    }

    public function filterPengukuranBulanPasien(Request $request)
    {
        try {
            $data = $request->get('month');
            if ($request->has('month')) {
                $month = $request->input('month');
                $pasien = Pasiens::whereRaw('MONTH(tanggal_pengukuran) = ' . $month)->get();
            }

            return ResponseFormatter::success([
                'token_type' => 'Bearer',
                'data' => $pasien,
            ], 'Get Data Pasien berhasil');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error
            ], 'Get Data Pasien Gagal', 500);
        }
    }

    public function filterPengukuranTahunPasien(Request $request)
    {
        try {
            if ($request->has('year')) {
                $year = $request->input('year');
                $pasien = Pasiens::whereRaw('YEAR(tanggal_pengukuran) = ' . $year)->get();
            }
            return ResponseFormatter::success([
                'token_type' => 'Bearer',
                'data' => $pasien,
            ], 'Get Data Pasien berhasil');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error
            ], 'Get Data Pasien Gagal', 500);
        }
    }
}
