<?php

namespace App\Http\Controllers\API;

use Exception;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Actions\Fortify\PasswordValidationRules;
use App\Models\User;

class AuthController extends Controller
{
    use PasswordValidationRules;

    public function login(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                // Validasi input
                'nik' => 'required|exists:users',
                'password' => 'required'
            ]);



            // Cek credentials
            $credentials = request(['nik', 'password']);
            if (!Auth::attempt($credentials)) {
                return ResponseFormatter::error([
                    'message' => 'Unauthorized',
                    'error' => $validator->errors()->isEmpty() ? '' : $validator->errors(),
                ], 'Authentication Failed', 500);
            }
            if (!Auth::attempt($credentials)) {
                return ResponseFormatter::error([
                    'message' => 'Unauthorized'
                ], 'Authentication Failed', 500);
            }

            // Jika hash tidak sesuai maka beri error
            $kader = User::where('nik', $request->nik)->first();
            if (!Hash::check($request->password, $kader->password, [])) {
                throw new \Exception('Invalid Credentials');
            }

            $tokenResult = $kader->createToken('authToken')->plainTextToken;
            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'kader' => $kader
            ], 'Authenticated');
            // Jika berhasil maka loginkan
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error
            ], 'Authenticated Failed', 500);
        }
    }
    public function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nama_kader' => ['required', 'string', 'max:255'],
                'desa' => ['required', 'string', 'max:255'],
                'rt' => ['required', 'int',],
                'rw' => ['required', 'int',],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => $this->passwordRules()
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            User::create([
                'nama_kader' => $request->nama_kader,
                'email' => $request->email,
                'nik' => $request->nik,
                'desa' => $request->desa,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'role' => 0,
                'password' => Hash::make($request->password),
            ]);

            $kader = User::where('email', $request->email)->first();

            return ResponseFormatter::success([
                'token_type' => 'Bearer',
                'kader' => $kader
            ], 'Registrasi Success');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error
            ], 'Authentication Failed', 500);
        }
    }

    public function logout(Request $request)
    {
        $token = $request->user()->currentAccessToken()->delete();

        return ResponseFormatter::success($token, 'Token Revoked');
    }

    public function fetchKader(Request $request)
    {
        return ResponseFormatter::success($request->user(), 'Data Profile user berhasil diambil');
    }

    public function updateProfile(Request $request)
    {
        $data = $request->all();

        $user = Auth::user();
        $user->update($data);

        return ResponseFormatter::success($user, 'Profile Updated');
    }

    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // Validasi input
            'old_password' => 'required',
            'password' => 'required',
            'confirmation_password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $user = $request->user();
        if (Hash::check($request->old_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->password)
            ]);
            return ResponseFormatter::success([
                'message' => 'Password berhasil diubah'
            ], 'Password berhasil diubah');
        } else {
            return ResponseFormatter::error([
                'message' => 'Password lama tidak sesuai'
            ], 'Password lama tidak sesuai');
        }
    }
}
