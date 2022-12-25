<?php

namespace App\Helpers;

class Perhitungan {
   
    public static function beratBadanLakiLaki($request, $bulan, $data)
    {
        if ($bulan == 0) {
            if ($request < 2.1) {
                $data = "Sangat Kurang";
            } else if ($request >= 2.1 && $request < 2.5) {
                $data = "Kurang";
            } else if ($request >= 2.5 && $request <= 3.9) {
                $data = "Normal";
            } else if ($request > 3.9) {
                $data = "Lebih";
            }
        } else if ($bulan == 1) {
            if ($request < 2.9) {
                $data = "Sangat Kurang";
            } else if ($request >= 2.9 && $request < 3.4) {
                $data = "Kurang";
            } else if ($request >= 3.4 && $request <= 5.1) {
                $data = "Normal";
            } else if ($request > 5.1) {
                $data = "Lebih";
            }
        } else if ($bulan == 2) {
            if ($request < 3.8) {
                $data = "Sangat Kurang";
            } else if ($request >= 3.8 && $request < 4.3) {
                $data = "Kurang";
            } else if ($request >= 4.3 && $request <= 6.3) {
                $data = "Normal";
            } else if ($request > 6.3) {
                $data = "Lebih";
            }
        } else if ($bulan == 3) {
            if ($request < 4.4) {
                $data = "Sangat Kurang";
            } else if ($request >= 4.4 && $request < 5.0) {
                $data = "Kurang";
            } else if ($request >= 5.0 && $request <= 7.2) {
                $data = "Normal";
            } else if ($request > 7.2) {
                $data = "Lebih";
            }
        } else if ($bulan == 4) {
            if ($request < 4.9) {
                $data = "Sangat Kurang";
            } else if ($request >= 4.9 && $request < 5.6) {
                $data = "Kurang";
            } else if ($request >= 5.6 && $request <= 7.8) {
                $data = "Normal";
            } else if ($request > 7.8) {
                $data = "Lebih";
            }
        } else if ($bulan == 5) {
            if ($request < 5.3) {
                $data = "Sangat Kurang";
            } else if ($request >= 5.3 && $request < 6.0) {
                $data = "Kurang";
            } else if ($request >= 6.0 && $request <= 8.4) {
                $data = "Normal";
            } else if ($request > 8.4) {
                $data = "Lebih";
            }
        } else if ($bulan == 6) {
            if ($request < 5.7) {
                $data = "Sangat Kurang";
            } else if ($request >= 5.7 && $request < 6.4) {
                $data = "Kurang";
            } else if ($request >= 6.4 && $request <= 8.8) {
                $data = "Normal";
            } else if ($request > 8.8) {
                $data = "Lebih";
            }
        } else if ($bulan == 7) {
            if ($request < 5.9) {
                $data = "Sangat Kurang";
            } else if ($request >= 5.9 && $request < 6.7) {
                $data = "Kurang";
            } else if ($request >= 6.7 && $request <= 9.2) {
                $data = "Normal";
            } else if ($request > 9.2) {
                $data = "Lebih";
            }
        } else if ($bulan == 8) {
            if ($request < 6.2) {
                $data = "Sangat Kurang";
            } else if ($request >= 6.2 && $request < 6.9) {
                $data = "Kurang";
            } else if ($request >= 6.9 && $request <= 9.6) {
                $data = "Normal";
            } else if ($request > 9.6) {
                $data = "Lebih";
            }
        } else if ($bulan == 9) {
            if ($request < 6.4) {
                $data = "Sangat Kurang";
            } else if ($request >= 6.4 && $request < 7.1) {
                $data = "Kurang";
            } else if ($request >= 7.1 && $request <= 9.9) {
                $data = "Normal";
            } else if ($request > 9.9) {

                $data = "Lebih";
            }
        } else if ($bulan == 10) {
            if ($request < 6.6) {
                $data = "Sangat Kurang";
            } else if ($request >= 6.6 && $request < 7.4) {
                $data = "Kurang";
            } else if ($request >= 7.4 && $request <= 10.2) {
                $data = "Normal";
            } else if ($request > 10.2) {
                $data = "Lebih";
            }
        } else if ($bulan == 11) {
            if ($request < 6.8) {
                $data = "Sangat Kurang";
            } else if ($request >= 6.8 && $request < 7.6) {
                $data = "Kurang";
            } else if ($request >= 7.6 && $request <= 10.5) {
                $data = "Normal";
            } else if ($request > 10.5) {

                $data = "Lebih";
            }
        } else if ($bulan == 12) {
            if ($request < 6.9) {
                $data = "Sangat Kurang";
            } else if ($request >= 6.9 && $request < 7.7) {
                $data = "Kurang";
            } else if ($request >= 7.7 && $request <= 10.8) {
                $data = "Normal";
            } else if ($request > 10.8) {
                $data = "Lebih";
            }
        } else if ($bulan == 13) {
            if ($request < 7.1) {
                $data = "Sangat Kurang";
            } else if ($request >= 7.1 && $request < 7.9) {
                $data = "Kurang";
            } else if ($request >= 7.9 && $request <= 11.0) {
                $data = "Normal";
            } else if ($request > 11.0) {
                $data = "Lebih";
            }
        } else if ($bulan == 14) {
            if ($request < 7.2) {
                $data = "Sangat Kurang";
            } else if ($request >= 7.2 && $request < 8.1) {
                $data = "Kurang";
            } else if ($request >= 8.1 && $request <= 11.3) {
                $data = "Normal";
            } else if ($request > 11.3) {
                $data = "Lebih";
            }
        } else if ($bulan == 15) {
            if ($request < 7.4) {
                $data = "Sangat Kurang";
            } else if ($request >= 7.4 && $request < 8.3) {
                $data = "Kurang";
            } else if ($request >= 8.3 && $request <= 11.5) {
                $data = "Normal";
            } else if ($request > 11.5) {
                $data = "Lebih";
            }
        } else if ($bulan == 16) {
            if ($request < 7.5) {
                $data = "Sangat Kurang";
            } else if ($request >= 7.5 && $request < 8.4) {
                $data = "Kurang";
            } else if ($request >= 8.4 && $request <= 11.7) {
                $data = "Normal";
            } else if ($request > 11.7) {
                $data = "Lebih";
            }
        } else if ($bulan == 17) {
            if ($request < 7.7) {
                $data = "Sangat Kurang";
            } else if ($request >= 7.7 && $request < 8.6) {
                $data = "Kurang";
            } else if ($request >= 8.6 && $request <= 12.0) {
                $data = "Normal";
            } else if ($request > 12.0) {
                $data = "Lebih";
            }
        } else if ($bulan == 18) {
            if ($request < 7.8) {
                $data = "Sangat Kurang";
            } else if ($request >= 7.8 && $request < 8.8) {
                $data = "Kurang";
            } else if ($request >= 8.8 && $request <= 12.2) {
                $data = "Normal";
            } else if ($request > 12.2) {
                $data = "Lebih";
            }
        } else if ($bulan == 19) {
            if ($request < 8.0) {
                $data = "Sangat Kurang";
            } else if ($request >= 8.0 && $request < 8.9) {
                $data = "Kurang";
            } else if ($request >= 8.9 && $request <= 12.5) {
                $data = "Normal";
            } else if ($request > 12.5) {
                $data = "Lebih";
            }
        } else if ($bulan == 20) {
            if ($request < 8.1) {
                $data = "Sangat Kurang";
            } else if ($request >= 8.1  && $request < 9.1) {
                $data = "Kurang";
            } else if ($request >= 9.1  && $request <= 12.7) {
                $data = "Normal";
            } else if ($request > 12.7) {
                $data = "Lebih";
            }
        } else if ($bulan == 21) {
            if ($request < 8.2) {
                $data = "Sangat Kurang";
            } else if ($request >= 8.2 && $request < 9.2) {
                $data = "Kurang";
            } else if ($request >= 9.2 && $request <= 12.9) {
                $data = "Normal";
            } else if ($request > 12.9) {
                $data = "Lebih";
            }
        } else if ($bulan == 22) {
            if ($request < 8.4) {
                $data = "Sangat Kurang";
            } else if ($request >= 8.4 && $request < 9.4) {
                $data = "Kurang";
            } else if ($request >= 9.4 && $request <= 13.2) {
                $data = "Normal";
            } else if ($request > 13.2) {
                $data = "Lebih";
            }
        } else if ($bulan == 23) {
            if ($request < 8.5) {
                $data = "Sangat Kurang";
            } else if ($request >= 8.5 && $request < 9.5) {
                $data = "Kurang";
            } else if ($request >= 9.5 && $request <= 13.4) {
                $data = "Normal";
            } else if ($request > 13.4) {
                $data = "Lebih";
            }
        } else if ($bulan == 24) {
            if ($request < 8.6) {
                $data = "Sangat Kurang";
            } else if ($request >= 8.6 && $request < 9.7) {
                $data = "Kurang";
            } else if ($request >= 9.7  && $request <= 13.6) {
                $data = "Normal";
            } else if ($request > 13.6) {
                $data = "Lebih";
            }
        } else if ($bulan == 25) {
            if ($request < 8.8) {
                $data = "Sangat Kurang";
            } else if ($request >= 8.8 && $request < 9.8) {
                $data = "Kurang";
            } else if ($request >= 9.8 && $request <= 13.9) {
                $data = "Normal";
            } else if ($request > 13.9) {
                $data = "Lebih";
            }
        } else if ($bulan == 26) {
            if ($request < 8.9) {
                $data = "Sangat Kurang";
            } else if ($request >= 8.9 && $request < 10.0) {
                $data = "Kurang";
            } else if ($request >= 10.0 && $request <= 14.1) {
                $data = "Normal";
            } else if ($request > 14.1) {
                $data = "Lebih";
            }
        } else if ($bulan == 27) {
            if ($request < 9.0) {
                $data = "Sangat Kurang";
            } else if ($request >= 9.0 && $request < 10.1) {
                $data = "Kurang";
            } else if ($request >= 10.1  && $request <= 14.3) {
                $data = "Normal";
            } else if ($request > 14.3) {
                $data = "Lebih";
            }
        } else if ($bulan == 28) {
            if ($request < 9.1) {
                $data = "Sangat Kurang";
            } else if ($request >= 9.1 && $request < 10.2) {
                $data = "Kurang";
            } else if ($request >= 10.2 && $request <= 14.5) {
                $data = "Normal";
            } else if ($request > 14.5) {
                $data = "Lebih";
            }
        } else if ($bulan == 29) {
            if ($request < 9.2) {
                $data = "Sangat Kurang";
            } else if ($request >= 9.2 && $request < 10.4) {
                $data = "Kurang";
            } else if ($request >= 10.4 && $request <= 14.8) {
                $data = "Normal";
            } else if ($request > 14.8) {
                $data = "Lebih";
            }
        } else if ($bulan == 30) {
            if ($request < 9.4) {
                $data = "Sangat Kurang";
            } else if ($request >= 9.4 && $request < 10.5) {
                $data = "Kurang";
            } else if ($request >= 10.5  && $request <= 15.0) {
                $data = "Normal";
            } else if ($request > 15.0) {
                $data = "Lebih";
            }
        } else if ($bulan == 31) {
            if ($request < 9.5) {
                $data = "Sangat Kurang";
            } else if ($request >= 9.5 && $request < 10.7) {
                $data = "Kurang";
            } else if ($request >= 10.7 && $request <= 15.2) {
                $data = "Normal";
            } else if ($request > 15.2) {
                $data = "Lebih";
            }
        } else if ($bulan == 32) {
            if ($request < 9.6) {
                $data = "Sangat Kurang";
            } else if ($request >= 9.6 && $request < 10.8) {
                $data = "Kurang";
            } else if ($request >= 10.8  && $request <= 15.4) {
                $data = "Normal";
            } else if ($request > 15.4) {
                $data = "Lebih";
            }
        } else if ($bulan == 33) {
            if ($request < 9.7) {
                $data = "Sangat Kurang";
            } else if ($request >= 9.7 && $request < 10.9) {
                $data = "Kurang";
            } else if ($request >= 10.9 && $request <= 15.6) {
                $data = "Normal";
            } else if ($request > 15.6) {
                $data = "Lebih";
            }
        } else if ($bulan == 34) {
            if ($request < 9.8) {
                $data = "Sangat Kurang";
            } else if ($request >= 9.8 && $request < 11.0) {
                $data = "Kurang";
            } else if ($request >= 11.0 && $request <= 15.8) {
                $data = "Normal";
            } else if ($request > 15.8) {
                $data = "Lebih";
            }
        } else if ($bulan == 35) {
            if ($request < 9.9) {
                $data = "Sangat Kurang";
            } else if ($request >= 9.9 && $request < 11.2) {
                $data = "Kurang";
            } else if ($request >= 11.2  && $request <= 16.0) {
                $data = "Normal";
            } else if ($request > 16.0) {
                $data = "Lebih";
            }
        } else if ($bulan == 36) {
            if ($request < 10.0) {
                $data = "Sangat Kurang";
            } else if ($request >= 10.0 && $request < 11.3) {
                $data = "Kurang";
            } else if ($request >= 11.3  && $request <= 16.2) {
                $data = "Normal";
            } else if ($request > 16.2) {
                $data = "Lebih";
            }
        } else if ($bulan == 37) {
            if ($request < 10.1) {
                $data = "Sangat Kurang";
            } else if ($request >= 10.1 && $request < 11.4) {
                $data = "Kurang";
            } else if ($request >= 11.4 && $request <= 16.4) {
                $data = "Normal";
            } else if ($request > 16.4) {
                $data = "Lebih";
            }
        } else if ($bulan == 38) {
            if ($request < 10.2) {
                $data = "Sangat Kurang";
            } else if ($request >= 10.2 && $request < 11.5) {
                $data = "Kurang";
            } else if ($request >= 11.5  && $request <= 16.6) {
                $data = "Normal";
            } else if ($request > 16.6) {
                $data = "Lebih";
            }
        } else if ($bulan == 39) {
            if ($request < 10.3) {
                $data = "Sangat Kurang";
            } else if ($request >= 10.3 && $request < 11.6) {
                $data = "Kurang";
            } else if ($request >= 11.6  && $request <= 16.8) {
                $data = "Normal";
            } else if ($request > 16.8) {
                $data = "Lebih";
            }
        } else if ($bulan == 40) {
            if ($request < 10.4) {
                $data = "Sangat Kurang";
            } else if ($request >= 10.4  && $request < 11.8) {
                $data = "Kurang";
            } else if ($request >= 11.8  && $request <= 17.0) {
                $data = "Normal";
            } else if ($request > 17.0) {
                $data = "Lebih";
            }
        } else if ($bulan == 41) {
            if ($request < 10.5) {
                $data = "Sangat Kurang";
            } else if ($request >= 10.5 && $request < 11.9) {
                $data = "Kurang";
            } else if ($request >= 11.9 && $request <= 17.2) {
                $data = "Normal";
            } else if ($request > 17.2) {
                $data = "Lebih";
            }
        } else if ($bulan == 42) {
            if ($request < 10.6) {
                $data = "Sangat Kurang";
            } else if ($request >= 10.6 && $request < 12.0) {
                $data = "Kurang";
            } else if ($request >= 12.0 && $request <= 17.4) {
                $data = "Normal";
            } else if ($request > 17.4) {
                $data = "Lebih";
            }
        } else if ($bulan == 43) {
            if ($request < 10.7) {
                $data = "Sangat Kurang";
            } else if ($request >= 10.7 && $request < 12.1) {
                $data = "Kurang";
            } else if ($request >= 12.1  && $request <= 17.6) {
                $data = "Normal";
            } else if ($request > 17.6) {
                $data = "Lebih";
            }
        } else if ($bulan == 44) {
            if ($request < 10.8) {
                $data = "Sangat Kurang";
            } else if ($request >= 10.8 && $request < 12.2) {
                $data = "Kurang";
            } else if ($request >= 12.2  && $request <= 17.8) {
                $data = "Normal";
            } else if ($request > 17.8) {
                $data = "Lebih";
            }
        } else if ($bulan == 45) {
            if ($request < 10.9) {
                $data = "Sangat Kurang";
            } else if ($request >= 10.9 && $request < 12.4) {
                $data = "Kurang";
            } else if ($request >= 12.4 && $request <= 18.0) {
                $data = "Normal";
            } else if ($request > 18.0) {
                $data = "Lebih";
            }
        } else if ($bulan == 46) {
            if ($request < 11.0) {
                $data = "Sangat Kurang";
            } else if ($request >= 11.0 && $request < 12.5) {
                $data = "Kurang";
            } else if ($request >= 12.5 && $request <= 18.2) {
                $data = "Normal";
            } else if ($request > 18.2) {
                $data = "Lebih";
            }
        } else if ($bulan == 47) {
            if ($request < 11.1) {
                $data = "Sangat Kurang";
            } else if ($request >= 11.1  && $request < 12.6) {
                $data = "Kurang";
            } else if ($request >= 12.6   && $request <= 18.4) {
                $data = "Normal";
            } else if ($request > 18.4) {
                $data = "Lebih";
            }
        } else if ($bulan == 48) {
            if ($request < 11.2) {
                $data = "Sangat Kurang";
            } else if ($request >= 11.2 && $request < 12.7) {
                $data = "Kurang";
            } else if ($request >= 12.7  && $request <= 18.6) {
                $data = "Normal";
            } else if ($request > 18.6) {
                $data = "Lebih";
            }
        } else if ($bulan == 49) {
            if ($request < 11.3) {
                $data = "Sangat Kurang";
            } else if ($request >= 11.3 && $request < 12.8) {
                $data = "Kurang";
            } else if ($request >= 12.8 && $request <= 18.8) {
                $data = "Normal";
            } else if ($request > 18.8) {
                $data = "Lebih";
            }
        } else if ($bulan == 50) {
            if ($request < 11.4) {
                $data = "Sangat Kurang";
            } else if ($request >= 11.4 && $request < 12.9) {
                $data = "Kurang";
            } else if ($request >= 12.9   && $request <= 19.0) {
                $data = "Normal";
            } else if ($request > 19.0) {
                $data = "Lebih";
            }
        } else if ($bulan == 51) {
            if ($request < 11.5) {
                $data = "Sangat Kurang";
            } else if ($request >= 11.5 && $request < 13.1) {
                $data = "Kurang";
            } else if ($request >= 13.1  && $request <= 19.2) {
                $data = "Normal";
            } else if ($request > 19.2) {
                $data = "Lebih";
            }
        } else if ($bulan == 52) {
            if ($request < 11.6) {
                $data = "Sangat Kurang";
            } else if ($request >= 11.6 && $request < 13.2) {
                $data = "Kurang";
            } else if ($request >= 13.2   && $request <= 19.4) {
                $data = "Normal";
            } else if ($request > 19.4) {
                $data = "Lebih";
            }
        } else if ($bulan == 53) {
            if ($request < 11.7) {
                $data = "Sangat Kurang";
            } else if ($request >= 11.7 && $request < 13.3) {
                $data = "Kurang";
            } else if ($request >= 13.3 && $request <= 19.6) {
                $data = "Normal";
            } else if ($request > 19.6) {
                $data = "Lebih";
            }
        } else if ($bulan == 54) {
            if ($request < 11.8) {
                $data = "Sangat Kurang";
            } else if ($request >= 11.8 && $request < 13.4) {
                $data = "Kurang";
            } else if ($request >= 13.4 && $request <= 19.8) {
                $data = "Normal";
            } else if ($request > 19.8) {
                $data = "Lebih";
            }
        } else if ($bulan == 55) {
            if ($request < 11.9) {
                $data = "Sangat Kurang";
            } else if ($request >= 11.9  && $request < 13.5) {
                $data = "Kurang";
            } else if ($request >= 13.5   && $request <= 20.0) {
                $data = "Normal";
            } else if ($request > 20.0) {
                $data = "Lebih";
            }
        } else if ($bulan == 56) {
            if ($request < 12.0) {
                $data = "Sangat Kurang";
            } else if ($request >= 12.0 && $request < 13.6) {
                $data = "Kurang";
            } else if ($request >= 13.6  && $request <= 20.2) {
                $data = "Normal";
            } else if ($request > 20.2) {
                $data = "Lebih";
            }
        } else if ($bulan == 57) {
            if ($request < 12.1) {
                $data = "Sangat Kurang";
            } else if ($request >= 12.1  && $request < 13.7) {
                $data = "Kurang";
            } else if ($request >= 13.7 && $request <= 20.4) {
                $data = "Normal";
            } else if ($request > 20.4) {
                $data = "Lebih";
            }
        } else if ($bulan == 58) {
            if ($request < 12.2) {
                $data = "Sangat Kurang";
            } else if ($request >= 12.2 && $request < 13.8) {
                $data = "Kurang";
            } else if ($request >= 13.8  && $request <= 16.6) {
                $data = "Normal";
            } else if ($request > 16.6) {
                $data = "Lebih";
            }
        } else if ($bulan == 59) {
            if ($request < 12.3) {
                $data = "Sangat Kurang";
            } else if ($request >= 12.3 && $request < 14.0) {
                $data = "Kurang";
            } else if ($request >= 14.0   && $request <= 20.8) {
                $data = "Normal";
            } else if ($request > 20.8) {
                $data = "Lebih";
            }
        } else if ($bulan == 60) {
            if ($request < 12.4) {
                $data = "Sangat Kurang";
            } else if ($request >= 12.4  && $request < 14.1) {
                $data = "Kurang";
            } else if ($request >= 14.1   && $request <= 21.0) {
                $data = "Normal";
            } else if ($request > 21.0) {
                $data = "Lebih";
            }
        }

        return $data;
    }

    public static function beratBadanPerempuan($value, $bulan, $data)
    {
        if ($bulan == 0) {
            if ($value < 2.0) {
                $data = "Sangat Kurang";
            } else if ($value >= 2.0  && $value < 2.4) {
                $data = "Kurang";
            } else if ($value >= 2.4 && $value <= 3.7) {
                $data = "Normal";
            } else if ($value > 3.7) {
                $data = "Lebih";
            }
        } else if ($bulan == 1) {
            if ($value < 2.7) {
                $data = "Sangat Kurang";
            } else if ($value >= 2.7 && $value < 3.2) {
                $data = "Kurang";
            } else if ($value >= 3.2 && $value <= 4.8) {
                $data = "Normal";
            } else if ($value > 4.8) {
                $data = "Lebih";
            }
        } else if ($bulan == 2) {
            if ($value < 3.4) {
                $data = "Sangat Kurang";
            } else if ($value >= 3.4 && $value < 3.9) {
                $data = "Kurang";
            } else if ($value >= 3.9 && $value <= 5.8) {
                $data = "Normal";
            } else if ($value > 5.8) {
                $data = "Lebih";
            }
        } else if ($bulan == 3) {
            if ($value < 4.0) {
                $data = "Sangat Kurang";
            } else if ($value >= 4.0 && $value < 4.5) {
                $data = "Kurang";
            } else if ($value >= 4.5 && $value <= 6.6) {
                $data = "Normal";
            } else if ($value > 6.6) {
                $data = "Lebih";
            }
        } else if ($bulan == 4) {
            if ($value < 4.4) {
                $data = "Sangat Kurang";
            } else if ($value >= 4.4 && $value < 5.0) {
                $data = "Kurang";
            } else if ($value >= 5.0  && $value <= 7.3) {
                $data = "Normal";
            } else if ($value > 7.3) {
                $data = "Lebih";
            }
        } else if ($bulan == 5) {
            if ($value < 4.8) {
                $data = "Sangat Kurang";
            } else if ($value >= 4.8 && $value < 5.4) {
                $data = "Kurang";
            } else if ($value >= 5.4  && $value <= 7.8) {
                $data = "Normal";
            } else if ($value > 7.8) {
                $data = "Lebih";
            }
        } else if ($bulan == 6) {
            if ($value < 5.1) {
                $data = "Sangat Kurang";
            } else if ($value >= 5.1 && $value < 5.7) {
                $data = "Kurang";
            } else if ($value >= 5.7 && $value <= 8.2) {
                $data = "Normal";
            } else if ($value > 8.2) {
                $data = "Lebih";
            }
        } else if ($bulan == 7) {
            if ($value < 5.3) {
                $data = "Sangat Kurang";
            } else if ($value >= 5.3 && $value < 6.0) {
                $data = "Kurang";
            } else if ($value >= 6.0 && $value <= 8.6) {
                $data = "Normal";
            } else if ($value > 8.6) {
                $data = "Lebih";
            }
        } else if ($bulan == 8) {
            if ($value < 5.6) {
                $data = "Sangat Kurang";
            } else if ($value >= 5.6 && $value < 6.3) {
                $data = "Kurang";
            } else if ($value >= 6.3 && $value <= 9.0) {
                $data = "Normal";
            } else if ($value > 9.0) {
                $data = "Lebih";
            }
        } else if ($bulan == 9) {
            if ($value < 5.8) {
                $data = "Sangat Kurang";
            } else if ($value >= 5.8 && $value < 6.5) {
                $data = "Kurang";
            } else if ($value >= 6.5 && $value <= 9.3) {
                $data = "Normal";
            } else if ($value > 9.3) {
                $data = "Lebih";
            }
        } else if ($bulan == 10) {
            if ($value < 5.9) {
                $data = "Sangat Kurang";
            } else if ($value >= 5.9 && $value < 6.7) {
                $data = "Kurang";
            } else if ($value >= 6.7  && $value <= 9.6) {
                $data = "Normal";
            } else if ($value > 9.6) {
                $data = "Lebih";
            }
        } else if ($bulan == 11) {
            if ($value < 6.1) {
                $data = "Sangat Kurang";
            } else if ($value >= 6.1 && $value < 6.9) {
                $data = "Kurang";
            } else if ($value >= 6.9 && $value <= 9.9) {
                $data = "Normal";
            } else if ($value > 9.9) {
                $data = "Lebih";
            }
        } else if ($bulan == 12) {
            if ($value < 6.3) {
                $data = "Sangat Kurang";
            } else if ($value >= 6.3 && $value < 7.0) {
                $data = "Kurang";
            } else if ($value >= 7.0 && $value <= 10.1) {
                $data = "Normal";
            } else if ($value > 10.1) {
                $data = "Lebih";
            }
        } else if ($bulan == 13) {
            if ($value < 6.4) {
                $data = "Sangat Kurang";
            } else if ($value >= 6.4 && $value < 7.2) {
                $data = "Kurang";
            } else if ($value >= 7.2  && $value <= 10.4) {
                $data = "Normal";
            } else if ($value > 10.4) {
                $data = "Lebih";
            }
        } else if ($bulan == 14) {
            if ($value < 6.6) {
                $data = "Sangat Kurang";
            } else if ($value >= 6.6 && $value < 7.4) {
                $data = "Kurang";
            } else if ($value >= 7.4 && $value <= 10.6) {
                $data = "Normal";
            } else if ($value > 10.6) {
                $data = "Lebih";
            }
        } else if ($bulan == 15) {
            if ($value < 6.7) {
                $data = "Sangat Kurang";
            } else if ($value >= 6.7 && $value < 7.6) {
                $data = "Kurang";
            } else if ($value >= 7.6  && $value <= 10.9) {
                $data = "Normal";
            } else if ($value > 10.9) {
                $data = "Lebih";
            }
        } else if ($bulan == 16) {
            if ($value < 6.9) {
                $data = "Sangat Kurang";
            } else if ($value >= 6.9 && $value < 7.7) {
                $data = "Kurang";
            } else if ($value >= 7.7 && $value <= 11.1) {
                $data = "Normal";
            } else if ($value > 11.1) {
                $data = "Lebih";
            }
        } else if ($bulan == 17) {
            if ($value < 7.0) {
                $data = "Sangat Kurang";
            } else if ($value >= 7.0 && $value < 7.9) {
                $data = "Kurang";
            } else if ($value >= 7.9 && $value <= 11.4) {
                $data = "Normal";
            } else if ($value > 11.4) {
                $data = "Lebih";
            }
        } else if ($bulan == 18) {
            if ($value < 7.2) {
                $data = "Sangat Kurang";
            } else if ($value >= 7.2 && $value < 8.1) {
                $data = "Kurang";
            } else if ($value >= 8.1  && $value <= 11.6) {
                $data = "Normal";
            } else if ($value > 11.6) {
                $data = "Lebih";
            }
        } else if ($bulan == 19) {
            if ($value < 7.3) {
                $data = "Sangat Kurang";
            } else if ($value >= 7.3 && $value < 8.2) {
                $data = "Kurang";
            } else if ($value >= 8.2 && $value <= 11.8) {
                $data = "Normal";
            } else if ($value > 11.8) {
                $data = "Lebih";
            }
        } else if ($bulan == 20) {
            if ($value < 7.5) {
                $data = "Sangat Kurang";
            } else if ($value >= 7.5  && $value < 8.4) {
                $data = "Kurang";
            } else if ($value >= 8.4   && $value <= 12.1) {
                $data = "Normal";
            } else if ($value > 12.1) {
                $data = "Lebih";
            }
        } else if ($bulan == 21) {
            if ($value < 7.6) {
                $data = "Sangat Kurang";
            } else if ($value >= 7.6 && $value < 8.6) {
                $data = "Kurang";
            } else if ($value >= 8.6  && $value <= 12.3) {
                $data = "Normal";
            } else if ($value > 12.3) {
                $data = "Lebih";
            }
        } else if ($bulan == 22) {
            if ($value < 7.8) {
                $data = "Sangat Kurang";
            } else if ($value >= 7.8 && $value < 8.7) {
                $data = "Kurang";
            } else if ($value >= 8.7 && $value <= 12.5) {
                $data = "Normal";
            } else if ($value > 12.5) {
                $data = "Lebih";
            }
        } else if ($bulan == 23) {
            if ($value < 7.9) {
                $data = "Sangat Kurang";
            } else if ($value >= 7.9 && $value < 8.9) {
                $data = "Kurang";
            } else if ($value >= 8.9 && $value <= 12.8) {
                $data = "Normal";
            } else if ($value > 12.8) {
                $data = "Lebih";
            }
        } else if ($bulan == 24) {
            if ($value < 8.1) {
                $data = "Sangat Kurang";
            } else if ($value >= 8.1 && $value < 9.0) {
                $data = "Kurang";
            } else if ($value >= 9.0  && $value <= 13.0) {
                $data = "Normal";
            } else if ($value > 13.0) {
                $data = "Lebih";
            }
        } else if ($bulan == 25) {
            if ($value < 8.2) {
                $data = "Sangat Kurang";
            } else if ($value >= 8.2 && $value < 9.2) {
                $data = "Kurang";
            } else if ($value >= 9.2 && $value <= 13.3) {
                $data = "Normal";
            } else if ($value > 13.3) {
                $data = "Lebih";
            }
        } else if ($bulan == 26) {
            if ($value < 8.4) {
                $data = "Sangat Kurang";
            } else if ($value >= 8.4 && $value < 9.4) {
                $data = "Kurang";
            } else if ($value >= 9.4  && $value <= 13.5) {
                $data = "Normal";
            } else if ($value > 13.5) {
                $data = "Lebih";
            }
        } else if ($bulan == 27) {
            if ($value < 8.5) {
                $data = "Sangat Kurang";
            } else if ($value >= 8.5 && $value < 9.5) {
                $data = "Kurang";
            } else if ($value >= 9.5   && $value <= 13.7) {
                $data = "Normal";
            } else if ($value > 13.7) {
                $data = "Lebih";
            }
        } else if ($bulan == 28) {
            if ($value < 8.6) {
                $data = "Sangat Kurang";
            } else if ($value >= 8.6 && $value < 9.7) {
                $data = "Kurang";
            } else if ($value >= 9.7 && $value <= 14.0) {
                $data = "Normal";
            } else if ($value > 14.0) {
                $data = "Lebih";
            }
        } else if ($bulan == 29) {
            if ($value < 8.8) {
                $data = "Sangat Kurang";
            } else if ($value >= 8.8 && $value < 9.8) {
                $data = "Kurang";
            } else if ($value >= 9.8  && $value <= 14.2) {
                $data = "Normal";
            } else if ($value > 14.2) {
                $data = "Lebih";
            }
        } else if ($bulan == 30) {
            if ($value < 8.9) {
                $data = "Sangat Kurang";
            } else if ($value >= 8.9 && $value < 10.0) {
                $data = "Kurang";
            } else if ($value >= 10.0  && $value <= 14.4) {
                $data = "Normal";
            } else if ($value > 14.4) {
                $data = "Lebih";
            }
        } else if ($bulan == 31) {
            if ($value < 9.0) {
                $data = "Sangat Kurang";
            } else if ($value >= 9.0 && $value < 10.1) {
                $data = "Kurang";
            } else if ($value >= 10.1  && $value <= 14.7) {
                $data = "Normal";
            } else if ($value > 14.7) {
                $data = "Lebih";
            }
        } else if ($bulan == 32) {
            if ($value < 9.1) {
                $data = "Sangat Kurang";
            } else if ($value >= 9.1  && $value < 10.3) {
                $data = "Kurang";
            } else if ($value >= 10.3  && $value <= 14.9) {
                $data = "Normal";
            } else if ($value > 14.9) {
                $data = "Lebih";
            }
        } else if ($bulan == 33) {
            if ($value < 9.3) {
                $data = "Sangat Kurang";
            } else if ($value >= 9.3 && $value < 10.4) {
                $data = "Kurang";
            } else if ($value >= 10.4 && $value <= 15.1) {
                $data = "Normal";
            } else if ($value > 15.1) {
                $data = "Lebih";
            }
        } else if ($bulan == 34) {
            if ($value < 9.4) {
                $data = "Sangat Kurang";
            } else if ($value >= 9.4  && $value < 10.5) {
                $data = "Kurang";
            } else if ($value >= 10.5  && $value <= 15.4) {
                $data = "Normal";
            } else if ($value > 15.4) {
                $data = "Lebih";
            }
        } else if ($bulan == 35) {
            if ($value < 9.5) {
                $data = "Sangat Kurang";
            } else if ($value >= 9.5 && $value < 10.7) {
                $data = "Kurang";
            } else if ($value >= 10.7  && $value <= 15.6) {
                $data = "Normal";
            } else if ($value > 15.6) {
                $data = "Lebih";
            }
        } else if ($bulan == 36) {
            if ($value < 9.6) {
                $data = "Sangat Kurang";
            } else if ($value >= 9.6 && $value < 10.8) {
                $data = "Kurang";
            } else if ($value >= 10.8   && $value <= 15.8) {
                $data = "Normal";
            } else if ($value > 15.8) {
                $data = "Lebih";
            }
        } else if ($bulan == 37) {
            if ($value < 9.7) {
                $data = "Sangat Kurang";
            } else if ($value >= 9.7 && $value < 10.9) {
                $data = "Kurang";
            } else if ($value >= 10.9 && $value <= 16.0) {
                $data = "Normal";
            } else if ($value > 16.0) {
                $data = "Lebih";
            }
        } else if ($bulan == 38) {
            if ($value < 9.8) {
                $data = "Sangat Kurang";
            } else if ($value >= 9.8 && $value < 11.1) {
                $data = "Kurang";
            } else if ($value >= 11.1   && $value <= 16.3) {
                $data = "Normal";
            } else if ($value > 16.3) {
                $data = "Lebih";
            }
        } else if ($bulan == 39) {
            if ($value < 9.9) {
                $data = "Sangat Kurang";
            } else if ($value >= 9.9 && $value < 11.2) {
                $data = "Kurang";
            } else if ($value >= 11.2  && $value <= 16.5) {
                $data = "Normal";
            } else if ($value > 16.5) {
                $data = "Lebih";
            }
        } else if ($bulan == 40) {
            if ($value < 10.1) {
                $data = "Sangat Kurang";
            } else if ($value >= 10.1  && $value < 11.3) {
                $data = "Kurang";
            } else if ($value >= 11.3  && $value <= 16.7) {
                $data = "Normal";
            } else if ($value > 16.7) {
                $data = "Lebih";
            }
        } else if ($bulan == 41) {
            if ($value < 10.2) {
                $data = "Sangat Kurang";
            } else if ($value >= 10.2 && $value < 11.5) {
                $data = "Kurang";
            } else if ($value >= 11.5 && $value <= 16.9) {
                $data = "Normal";
            } else if ($value > 16.9) {
                $data = "Lebih";
            }
        } else if ($bulan == 42) {
            if ($value < 10.3) {
                $data = "Sangat Kurang";
            } else if ($value >= 10.3 && $value < 11.6) {
                $data = "Kurang";
            } else if ($value >= 11.6  && $value <= 17.2) {
                $data = "Normal";
            } else if ($value > 17.2) {
                $data = "Lebih";
            }
        } else if ($bulan == 43) {
            if ($value < 10.4) {
                $data = "Sangat Kurang";
            } else if ($value >= 10.4 && $value < 11.7) {
                $data = "Kurang";
            } else if ($value >= 11.7   && $value <= 17.4) {
                $data = "Normal";
            } else if ($value > 17.4) {
                $data = "Lebih";
            }
        } else if ($bulan == 44) {
            if ($value < 10.5) {
                $data = "Sangat Kurang";
            } else if ($value >= 10.5 && $value < 11.8) {
                $data = "Kurang";
            } else if ($value >= 11.8  && $value <= 17.6) {
                $data = "Normal";
            } else if ($value > 17.6) {
                $data = "Lebih";
            }
        } else if ($bulan == 45) {
            if ($value < 10.6) {
                $data = "Sangat Kurang";
            } else if ($value >= 10.6 && $value < 12.0) {
                $data = "Kurang";
            } else if ($value >= 12.0 && $value <= 17.8) {
                $data = "Normal";
            } else if ($value > 17.8) {
                $data = "Lebih";
            }
        } else if ($bulan == 46) {
            if ($value < 10.7) {
                $data = "Sangat Kurang";
            } else if ($value >= 10.7 && $value < 12.1) {
                $data = "Kurang";
            } else if ($value >= 12.1  && $value <= 18.1) {
                $data = "Normal";
            } else if ($value > 18.1) {
                $data = "Lebih";
            }
        } else if ($bulan == 47) {
            if ($value < 10.8) {
                $data = "Sangat Kurang";
            } else if ($value >= 10.8  && $value < 12.2) {
                $data = "Kurang";
            } else if ($value >= 12.2   && $value <= 18.3) {
                $data = "Normal";
            } else if ($value > 18.3) {
                $data = "Lebih";
            }
        } else if ($bulan == 48) {
            if ($value < 10.9) {
                $data = "Sangat Kurang";
            } else if ($value >= 10.9 && $value < 12.3) {
                $data = "Kurang";
            } else if ($value >= 12.3  && $value <= 18.5) {
                $data = "Normal";
            } else if ($value > 18.5) {
                $data = "Lebih";
            }
        } else if ($bulan == 49) {
            if ($value < 11.0) {
                $data = "Sangat Kurang";
            } else if ($value >= 11.0 && $value < 12.4) {
                $data = "Kurang";
            } else if ($value >= 12.4 && $value <= 18.8) {
                $data = "Normal";
            } else if ($value > 18.8) {
                $data = "Lebih";
            }
        } else if ($bulan == 50) {
            if ($value < 11.1) {
                $data = "Sangat Kurang";
            } else if ($value >= 11.1 && $value < 12.6) {
                $data = "Kurang";
            } else if ($value >= 12.6    && $value <= 19.0) {
                $data = "Normal";
            } else if ($value > 19.0) {
                $data = "Lebih";
            }
        } else if ($bulan == 51) {
            if ($value < 11.2) {
                $data = "Sangat Kurang";
            } else if ($value >= 11.2 && $value < 12.7) {
                $data = "Kurang";
            } else if ($value >= 12.7   && $value <= 19.2) {
                $data = "Normal";
            } else if ($value > 19.2) {
                $data = "Lebih";
            }
        } else if ($bulan == 52) {
            if ($value < 11.3) {
                $data = "Sangat Kurang";
            } else if ($value >= 11.3 && $value < 12.8) {
                $data = "Kurang";
            } else if ($value >= 12.8   && $value <= 19.4) {
                $data = "Normal";
            } else if ($value > 19.4) {
                $data = "Lebih";
            }
        } else if ($bulan == 53) {
            if ($value < 11.4) {
                $data = "Sangat Kurang";
            } else if ($value >= 11.4 && $value < 12.9) {
                $data = "Kurang";
            } else if ($value >= 12.9 && $value <= 19.7) {
                $data = "Normal";
            } else if ($value > 19.7) {
                $data = "Lebih";
            }
        } else if ($bulan == 54) {
            if ($value < 11.5) {
                $data = "Sangat Kurang";
            } else if ($value >= 11.5 && $value < 13.0) {
                $data = "Kurang";
            } else if ($value >= 13.0 && $value <= 19.9) {
                $data = "Normal";
            } else if ($value > 19.9) {
                $data = "Lebih";
            }
        } else if ($bulan == 55) {
            if ($value < 11.6) {
                $data = "Sangat Kurang";
            } else if ($value >= 11.6  && $value < 13.2) {
                $data = "Kurang";
            } else if ($value >= 13.2   && $value <= 20.1) {
                $data = "Normal";
            } else if ($value > 20.1) {
                $data = "Lebih";
            }
        } else if ($bulan == 56) {
            if ($value < 11.7) {
                $data = "Sangat Kurang";
            } else if ($value >= 11.7 && $value < 13.3) {
                $data = "Kurang";
            } else if ($value >= 13.3  && $value <= 20.3) {
                $data = "Normal";
            } else if ($value > 20.3) {
                $data = "Lebih";
            }
        } else if ($bulan == 57) {
            if ($value < 11.8) {
                $data = "Sangat Kurang";
            } else if ($value >= 11.8  && $value < 13.4) {
                $data = "Kurang";
            } else if ($value >= 13.4 && $value <= 20.6) {
                $data = "Normal";
            } else if ($value > 20.6) {
                $data = "Lebih";
            }
        } else if ($bulan == 58) {
            if ($value < 11.9) {
                $data = "Sangat Kurang";
            } else if ($value >= 11.9 && $value < 13.5) {
                $data = "Kurang";
            } else if ($value >= 13.5  && $value <= 20.8) {
                $data = "Normal";
            } else if ($value > 20.8) {
                $data = "Lebih";
            }
        } else if ($bulan == 59) {
            if ($value < 12.0) {
                $data = "Sangat Kurang";
            } else if ($value >= 12.0 && $value < 13.6) {
                $data = "Kurang";
            } else if ($value >= 13.6    && $value <= 21.0) {
                $data = "Normal";
            } else if ($value > 21.0) {
                $data = "Lebih";
            }
        } else if ($bulan == 60) {
            if ($value < 12.1) {
                $data = "Sangat Kurang";
            } else if ($value >= 12.1  && $value < 13.7) {
                $data = "Kurang";
            } else if ($value >= 13.7   && $value <= 21.2) {
                $data = "Normal";
            } else if ($value > 21.2) {
                $data = "Lebih";
            }
        }

        return $data;
    }

    public static function TinggiBadanmenurutUmurPerempuan($value, $bulan, $data, $posisi)
    {
        if ($bulan == 0) {
            if ($value < 43.6) {
                $data = "Sangat pendek";
            } else if ($value >= 43.6 && $value < 45.4) {
                $data = "Pendek";
            } else if ($value >= 45.4 && $value <= 54.7) {
                $data = "Normal";
            } else if ($value > 54.7) {
                $data = "Tinggi";
            }
        } else if ($bulan == 1) {
            if ($value < 47.8) {
                $data = "Sangat pendek";
            } else if ($value >= 47.8 && $value < 49.8) {
                $data = "Pendek";
            } else if ($value >= 49.8 && $value <= 59.5) {
                $data = "Normal";
            } else if ($value > 59.5) {
                $data = "Tinggi";
            }
        } else if ($bulan == 2) {
            if ($value < 51.0) {
                $data = "Sangat pendek";
            } else if ($value >= 51.0 && $value < 53.0) {
                $data = "Pendek";
            } else if ($value >= 53.0 && $value <= 63.2) {
                $data = "Normal";
            } else if ($value > 63.2) {
                $data = "Tinggi";
            }
        } else if ($bulan == 3) {
            if ($value < 53.5) {
                $data = "Sangat pendek";
            } else if ($value >= 53.5 && $value < 55.6) {
                $data = "Pendek";
            } else if ($value >= 55.6 && $value <= 66.1) {
                $data = "Normal";
            } else if ($value > 66.1) {
                $data = "Tinggi";
            }
        } else if ($bulan == 4) {
            if ($value < 55.6) {
                $data = "Sangat pendek";
            } else if ($value >= 55.6 && $value < 57.8) {
                $data = "Pendek";
            } else if ($value >= 57.8 && $value <= 68.6) {
                $data = "Normal";
            } else if ($value > 68.6) {
                $data = "Tinggi";
            }
        } else if ($bulan == 5) {
            if ($value < 57.4) {
                $data = "Sangat pendek";
            } else if ($value >= 57.4 && $value < 59.6) {
                $data = "Pendek";
            } else if ($value >= 59.6  && $value <= 70.7) {
                $data = "Normal";
            } else if ($value > 70.7) {
                $data = "Tinggi";
            }
        } else if ($bulan == 6) {
            if ($value < 58.9) {
                $data = "Sangat pendek";
            } else if ($value >= 58.9 && $value < 61.2) {
                $data = "Pendek";
            } else if ($value >= 61.2 && $value <= 72.5) {
                $data = "Normal";
            } else if ($value > 72.5) {
                $data = "Tinggi";
            }
        } else if ($bulan == 7) {
            if ($value < 60.3) {
                $data = "Sangat pendek";
            } else if ($value >= 60.3 && $value < 62.7) {
                $data = "Pendek";
            } else if ($value >= 62.7   && $value <= 74.2) {
                $data = "Normal";
            } else if ($value > 74.2) {
                $data = "Tinggi";
            }
        } else if ($bulan == 8) {
            if ($value < 61.7) {
                $data = "Sangat pendek";
            } else if ($value >= 61.7 && $value < 64.0) {
                $data = "Pendek";
            } else if ($value >= 64.0 && $value <= 75.8) {
                $data = "Normal";
            } else if ($value > 75.8) {
                $data = "Tinggi";
            }
        } else if ($bulan == 9) {
            if ($value < 62.9) {
                $data = "Sangat pendek";
            } else if ($value >= 62.9  && $value < 65.3) {
                $data = "Pendek";
            } else if ($value >= 65.3 && $value <= 77.4) {
                $data = "Normal";
            } else if ($value > 77.4) {
                $data = "Tinggi";
            }
        } else if ($bulan == 10) {
            if ($value < 64.1) {
                $data = "Sangat pendek";
            } else if ($value >= 64.1 && $value < 66.5) {
                $data = "Pendek";
            } else if ($value >= 66.5 && $value <= 78.9) {
                $data = "Normal";
            } else if ($value > 78.9) {
                $data = "Tinggi";
            }
        } else if ($bulan == 11) {
            if ($value < 65.2) {
                $data = "Sangat pendek";
            } else if ($value >= 65.2 && $value < 67.7) {
                $data = "Pendek";
            } else if ($value >= 67.7   && $value <= 80.3) {
                $data = "Normal";
            } else if ($value > 80.3) {
                $data = "Tinggi";
            }
        } else if ($bulan == 12) {
            if ($value < 66.3) {
                $data = "Sangat pendek";
            } else if ($value >= 66.3 && $value < 68.9) {
                $data = "Pendek";
            } else if ($value >= 68.9 && $value <= 81.7) {
                $data = "Normal";
            } else if ($value > 81.7) {
                $data = "Tinggi";
            }
        } else if ($bulan == 13) {
            if ($value < 67.3) {
                $data = "Sangat pendek";
            } else if ($value >= 67.3 && $value < 70.0) {
                $data = "Pendek";
            } else if ($value >= 70.0 && $value <= 83.1) {
                $data = "Normal";
            } else if ($value > 83.1) {
                $data = "Tinggi";
            }
        } else if ($bulan == 14) {
            if ($value < 68.3) {
                $data = "Sangat pendek";
            } else if ($value >= 68.3 && $value < 71.0) {
                $data = "Pendek";
            } else if ($value >= 71.0  && $value <= 84.4) {
                $data = "Normal";
            } else if ($value > 84.4) {
                $data = "Tinggi";
            }
        } else if ($bulan == 15) {
            if ($value < 69.3) {
                $data = "Sangat pendek";
            } else if ($value >= 69.3 && $value < 72.0) {
                $data = "Pendek";
            } else if ($value >= 72.0 && $value <= 85.7) {
                $data = "Normal";
            } else if ($value > 85.7) {
                $data = "Tinggi";
            }
        } else if ($bulan == 16) {
            if ($value < 70.2) {
                $data = "Sangat pendek";
            } else if ($value >= 70.2 && $value < 73.0) {
                $data = "Pendek";
            } else if ($value >= 73.0  && $value <= 87.0) {
                $data = "Normal";
            } else if ($value > 87.0) {
                $data = "Tinggi";
            }
        } else if ($bulan == 17) {
            if ($value < 71.1) {
                $data = "Sangat pendek";
            } else if ($value >= 71.1 && $value < 74.0) {
                $data = "Pendek";
            } else if ($value >= 74.0 && $value <= 88.2) {
                $data = "Normal";
            } else if ($value > 88.2) {
                $data = "Tinggi";
            }
        } else if ($bulan == 18) {
            if ($value < 72.0) {
                $data = "Sangat pendek";
            } else if ($value >= 72.0 && $value < 74.9) {
                $data = "Pendek";
            } else if ($value >= 74.9 && $value <= 89.4) {
                $data = "Normal";
            } else if ($value > 89.4) {
                $data = "Tinggi";
            }
        } else if ($bulan == 19) {
            if ($value < 72.8) {
                $data = "Sangat pendek";
            } else if ($value >= 72.8 && $value < 75.8) {
                $data = "Pendek";
            } else if ($value >= 75.8 && $value <= 90.6) {
                $data = "Normal";
            } else if ($value > 90.6) {
                $data = "Tinggi";
            }
        } else if ($bulan == 20) {
            if ($value < 73.7) {
                $data = "Sangat pendek";
            } else if ($value >= 73.7   && $value < 76.7) {
                $data = "Pendek";
            } else if ($value >= 76.7   && $value <= 91.7) {
                $data = "Normal";
            } else if ($value > 91.7) {
                $data = "Tinggi";
            }
        } else if ($bulan == 21) {
            if ($value < 74.5) {
                $data = "Sangat pendek";
            } else if ($value >= 74.5 && $value < 77.5) {
                $data = "Pendek";
            } else if ($value >= 77.5 && $value <= 92.9) {
                $data = "Normal";
            } else if ($value > 92.9) {
                $data = "Tinggi";
            }
        } else if ($bulan == 22) {
            if ($value < 75.2) {
                $data = "Sangat pendek";
            } else if ($value >= 75.2 && $value < 78.4) {
                $data = "Pendek";
            } else if ($value >= 78.4 && $value <= 94.0) {
                $data = "Normal";
            } else if ($value > 94.0) {
                $data = "Tinggi";
            }
        } else if ($bulan == 23) {
            if ($value < 76.0) {
                $data = "Sangat pendek";
            } else if ($value >= 76.0 && $value < 79.2) {
                $data = "Pendek";
            } else if ($value >= 79.2  && $value <= 95.0) {
                $data = "Normal";
            } else if ($value > 95.0) {
                $data = "Tinggi";
            }
        } else if ($bulan == 24) {
            if ($posisi == 0) {
                if ($value < 76.7) {
                    $data = "Sangat pendek";
                } else if ($value >= 76.7 && $value < 80.0) {
                    $data = "Pendek";
                } else if ($value >= 80.0  && $value <= 96.1) {
                    $data = "Normal";
                } else if ($value > 96.1) {
                    $data = "Tinggi";
                }
            } else if ($posisi == 1) {
                if ($value < 76.0) {
                    $data = "Sangat pendek";
                } else if ($value >= 76.0 && $value < 79.3) {
                    $data = "Pendek";
                } else if ($value >= 79.3  && $value <= 95.4) {
                    $data = "Normal";
                } else if ($value > 95.4) {
                    $data = "Tinggi";
                }
            }
        } else if ($bulan == 25) {
            if ($value < 76.8) {
                $data = "Sangat pendek";
            } else if ($value >= 76.8 && $value < 80.0) {
                $data = "Pendek";
            } else if ($value >= 80.0 && $value <= 96.4) {
                $data = "Normal";
            } else if ($value > 96.4) {
                $data = "Tinggi";
            }
        } else if ($bulan == 26) {
            if ($value < 77.5) {
                $data = "Sangat pendek";
            } else if ($value >= 77.5 && $value < 80.8) {
                $data = "Pendek";
            } else if ($value >= 80.8  && $value <= 97.4) {
                $data = "Normal";
            } else if ($value > 97.4) {
                $data = "Tinggi";
            }
        } else if ($bulan == 27) {
            if ($value < 78.1) {
                $data = "Sangat pendek";
            } else if ($value >= 78.1 && $value < 81.5) {
                $data = "Pendek";
            } else if ($value >= 81.5  && $value <= 98.4) {
                $data = "Normal";
            } else if ($value > 98.4) {
                $data = "Tinggi";
            }
        } else if ($bulan == 28) {
            if ($value < 78.8) {
                $data = "Sangat pendek";
            } else if ($value >= 78.8  && $value < 82.2) {
                $data = "Pendek";
            } else if ($value >= 82.2 && $value <= 99.4) {
                $data = "Normal";
            } else if ($value > 99.4) {
                $data = "Tinggi";
            }
        } else if ($bulan == 29) {
            if ($value < 79.5) {
                $data = "Sangat pendek";
            } else if ($value >= 79.5  && $value < 82.9) {
                $data = "Pendek";
            } else if ($value >= 82.9 && $value <= 100.3) {
                $data = "Normal";
            } else if ($value > 100.3) {
                $data = "Tinggi";
            }
        } else if ($bulan == 30) {
            if ($value < 80.1) {
                $data = "Sangat pendek";
            } else if ($value >= 80.1 && $value < 83.6) {
                $data = "Pendek";
            } else if ($value >= 83.6  && $value <= 101.3) {
                $data = "Normal";
            } else if ($value > 101.3) {
                $data = "Tinggi";
            }
        } else if ($bulan == 31) {
            if ($value < 80.7) {
                $data = "Sangat pendek";
            } else if ($value >= 80.7 && $value < 84.3) {
                $data = "Pendek";
            } else if ($value >= 84.3 && $value <= 102.2) {
                $data = "Normal";
            } else if ($value > 102.2) {
                $data = "Tinggi";
            }
        } else if ($bulan == 32) {
            if ($value < 81.3) {
                $data = "Sangat pendek";
            } else if ($value >= 81.3 && $value < 84.9) {
                $data = "Pendek";
            } else if ($value >= 84.9  && $value <= 103.1) {
                $data = "Normal";
            } else if ($value > 103.1) {
                $data = "Tinggi";
            }
        } else if ($bulan == 33) {
            if ($value < 81.9) {
                $data = "Sangat pendek";
            } else if ($value >= 81.9 && $value < 85.6) {
                $data = "Pendek";
            } else if ($value >= 85.6  && $value <= 103.9) {
                $data = "Normal";
            } else if ($value > 103.9) {
                $data = "Tinggi";
            }
        } else if ($bulan == 34) {
            if ($value < 82.5) {
                $data = "Sangat pendek";
            } else if ($value >= 82.5 && $value < 86.2) {
                $data = "Pendek";
            } else if ($value >= 86.2  && $value <= 104.8) {
                $data = "Normal";
            } else if ($value > 104.8) {
                $data = "Tinggi";
            }
        } else if ($bulan == 35) {
            if ($value < 83.1) {
                $data = "Sangat pendek";
            } else if ($value >= 83.1 && $value < 86.8) {
                $data = "Pendek";
            } else if ($value >= 86.8   && $value <= 105.6) {
                $data = "Normal";
            } else if ($value > 105.6) {
                $data = "Tinggi";
            }
        } else if ($bulan == 36) {
            if ($value < 83.6) {
                $data = "Sangat pendek";
            } else if ($value >= 83.6 && $value < 87.4) {
                $data = "Pendek";
            } else if ($value >= 87.4   && $value <= 106.5) {
                $data = "Normal";
            } else if ($value > 106.5) {
                $data = "Tinggi";
            }
        } else if ($bulan == 37) {
            if ($value < 84.2) {
                $data = "Sangat pendek";
            } else if ($value >= 84.2 && $value < 88.0) {
                $data = "Pendek";
            } else if ($value >= 88.0 && $value <= 107.3) {
                $data = "Normal";
            } else if ($value > 107.3) {
                $data = "Tinggi";
            }
        } else if ($bulan == 38) {
            if ($value < 84.7) {
                $data = "Sangat pendek";
            } else if ($value >= 84.7  && $value < 88.6) {
                $data = "Pendek";
            } else if ($value >= 88.6  && $value <= 108.1) {
                $data = "Normal";
            } else if ($value > 108.1) {
                $data = "Tinggi";
            }
        } else if ($bulan == 39) {
            if ($value < 85.3) {
                $data = "Sangat pendek";
            } else if ($value >= 85.3 && $value < 89.2) {
                $data = "Pendek";
            } else if ($value >= 89.2   && $value <= 108.9) {
                $data = "Normal";
            } else if ($value > 108.9) {
                $data = "Tinggi";
            }
        } else if ($bulan == 40) {
            if ($value < 85.8) {
                $data = "Sangat pendek";
            } else if ($value >= 85.8  && $value < 89.8) {
                $data = "Pendek";
            } else if ($value >= 89.8   && $value <= 109.7) {
                $data = "Normal";
            } else if ($value > 109.7) {
                $data = "Tinggi";
            }
        } else if ($bulan == 41) {
            if ($value < 86.3) {
                $data = "Sangat pendek";
            } else if ($value >= 86.3 && $value < 90.4) {
                $data = "Pendek";
            } else if ($value >= 90.4 && $value <= 110.5) {
                $data = "Normal";
            } else if ($value > 110.5) {
                $data = "Tinggi";
            }
        } else if ($bulan == 42) {
            if ($value < 88.0) {
                $data = "Sangat pendek";
            } else if ($value >= 88.0 && $value < 90.9) {
                $data = "Pendek";
            } else if ($value >= 90.9 && $value <= 111.2) {
                $data = "Normal";
            } else if ($value > 111.2) {
                $data = "Tinggi";
            }
        } else if ($bulan == 43) {
            if ($value < 87.4) {
                $data = "Sangat pendek";
            } else if ($value >= 87.4 && $value < 91.5) {
                $data = "Pendek";
            } else if ($value >= 91.5  && $value <= 112.0) {
                $data = "Normal";
            } else if ($value > 112.0) {
                $data = "Tinggi";
            }
        } else if ($bulan == 44) {
            if ($value < 87.9) {
                $data = "Sangat pendek";
            } else if ($value >= 87.9 && $value < 92.0) {
                $data = "Pendek";
            } else if ($value >= 92.0  && $value <= 112.7) {
                $data = "Normal";
            } else if ($value > 112.7) {
                $data = "Tinggi";
            }
        } else if ($bulan == 45) {
            if ($value < 88.4) {
                $data = "Sangat pendek";
            } else if ($value >= 88.4 && $value < 92.5) {
                $data = "Pendek";
            } else if ($value >= 92.5 && $value <= 113.5) {
                $data = "Normal";
            } else if ($value > 113.5) {
                $data = "Tinggi";
            }
        } else if ($bulan == 46) {
            if ($value < 88.9) {
                $data = "Sangat pendek";
            } else if ($value >= 88.9 && $value < 93.1) {
                $data = "Pendek";
            } else if ($value >= 93.1 && $value <= 114.2) {
                $data = "Normal";
            } else if ($value > 114.2) {
                $data = "Tinggi";
            }
        } else if ($bulan == 47) {
            if ($value < 89.3) {
                $data = "Sangat pendek";
            } else if ($value >= 89.3  && $value < 93.6) {
                $data = "Pendek";
            } else if ($value >= 93.6   && $value <= 114.9) {
                $data = "Normal";
            } else if ($value > 114.9) {
                $data = "Tinggi";
            }
        } else if ($bulan == 48) {
            if ($value < 89.8) {
                $data = "Sangat pendek";
            } else if ($value >= 89.8 && $value < 94.1) {
                $data = "Pendek";
            } else if ($value >= 94.1  && $value <= 115.7) {
                $data = "Normal";
            } else if ($value > 115.7) {
                $data = "Tinggi";
            }
        } else if ($bulan == 49) {
            if ($value < 90.3) {
                $data = "Sangat pendek";
            } else if ($value >= 90.3 && $value < 94.6) {
                $data = "Pendek";
            } else if ($value >= 94.6 && $value <= 116.4) {
                $data = "Normal";
            } else if ($value > 116.4) {
                $data = "Tinggi";
            }
        } else if ($bulan == 50) {
            if ($value < 90.7) {
                $data = "Sangat pendek";
            } else if ($value >= 90.7 && $value < 95.1) {
                $data = "Pendek";
            } else if ($value >= 95.1   && $value <= 117.1) {
                $data = "Normal";
            } else if ($value > 117.1) {
                $data = "Tinggi";
            }
        } else if ($bulan == 51) {
            if ($value < 91.2) {
                $data = "Sangat pendek";
            } else if ($value >= 91.2 && $value < 95.6) {
                $data = "Pendek";
            } else if ($value >= 95.6   && $value <= 117.7) {
                $data = "Normal";
            } else if ($value > 117.7) {
                $data = "Tinggi";
            }
        } else if ($bulan == 52) {
            if ($value < 91.7) {
                $data = "Sangat pendek";
            } else if ($value >= 91.7 && $value < 96.1) {
                $data = "Pendek";
            } else if ($value >= 96.1   && $value <= 118.4) {
                $data = "Normal";
            } else if ($value > 118.4) {
                $data = "Tinggi";
            }
        } else if ($bulan == 53) {
            if ($value < 92.1) {
                $data = "Sangat pendek";
            } else if ($value >= 92.1 && $value < 96.6) {
                $data = "Pendek";
            } else if ($value >= 96.6 && $value <= 119.1) {
                $data = "Normal";
            } else if ($value > 119.1) {
                $data = "Tinggi";
            }
        } else if ($bulan == 54) {
            if ($value < 92.6) {
                $data = "Sangat pendek";
            } else if ($value >= 92.6 && $value < 97.1) {
                $data = "Pendek";
            } else if ($value >= 97.1 && $value <= 119.8) {
                $data = "Normal";
            } else if ($value > 119.8) {
                $data = "Tinggi";
            }
        } else if ($bulan == 55) {
            if ($value < 93.0) {
                $data = "Sangat pendek";
            } else if ($value >= 93.0  && $value < 97.6) {
                $data = "Pendek";
            } else if ($value >= 97.6   && $value <= 120.4) {
                $data = "Normal";
            } else if ($value > 120.4) {
                $data = "Tinggi";
            }
        } else if ($bulan == 56) {
            if ($value < 93.4) {
                $data = "Sangat pendek";
            } else if ($value >= 93.4 && $value < 98.1) {
                $data = "Pendek";
            } else if ($value >= 98.1   && $value <= 121.1) {
                $data = "Normal";
            } else if ($value > 121.1) {
                $data = "Tinggi";
            }
        } else if ($bulan == 57) {
            if ($value < 93.9) {
                $data = "Sangat pendek";
            } else if ($value >= 93.9  && $value < 98.5) {
                $data = "Pendek";
            } else if ($value >= 98.5 && $value <= 121.8) {
                $data = "Normal";
            } else if ($value > 121.8) {
                $data = "Tinggi";
            }
        } else if ($bulan == 58) {
            if ($value < 94.3) {
                $data = "Sangat pendek";
            } else if ($value >= 94.3 && $value < 99.0) {
                $data = "Pendek";
            } else if ($value >= 99.0  && $value <= 122.4) {
                $data = "Normal";
            } else if ($value > 122.4) {
                $data = "Tinggi";
            }
        } else if ($bulan == 59) {
            if ($value < 94.7) {
                $data = "Sangat pendek";
            } else if ($value >= 94.7  && $value < 99.5) {
                $data = "Pendek";
            } else if ($value >= 99.5   && $value <= 123.2) {
                $data = "Normal";
            } else if ($value > 123.2) {
                $data = "Tinggi";
            }
        } else if ($bulan == 60) {
            if ($value < 95.2) {
                $data = "Sangat pendek";
            } else if ($value >= 95.2  && $value < 99.9) {
                $data = "Pendek";
            } else if ($value >= 99.9   && $value <= 123.7) {
                $data = "Normal";
            } else if ($value > 123.7) {
                $data = "Tinggi";
            }
        }

        return $data;
    }
    public static function TinggiBadanmenurutUmurLakiLaki($value, $bulan, $data, $posisi)
    {
        if ($bulan == 0) {
            if ($value < 44.2) {
                $data = "Sangat pendek";
            } else if ($value >= 44.2 && $value < 46.1) {
                $data = "Pendek";
            } else if ($value >= 46.1 && $value <= 55.6) {
                $data = "Normal";
            } else if ($value > 55.6) {
                $data = "Tinggi";
            }
        } else if ($bulan == 1) {
            if ($value < 48.9) {
                $data = "Sangat pendek";
            } else if ($value >= 48.9 && $value < 50.8) {
                $data = "Pendek";
            } else if ($value >= 50.8 && $value <= 60.6) {
                $data = "Normal";
            } else if ($value > 60.6) {
                $data = "Tinggi";
            }
        } else if ($bulan == 2) {
            if ($value < 52.4) {
                $data = "Sangat pendek";
            } else if ($value >= 52.4 && $value < 54.4) {
                $data = "Pendek";
            } else if ($value >= 54.4 && $value <= 64.4) {
                $data = "Normal";
            } else if ($value > 64.4) {
                $data = "Tinggi";
            }
        } else if ($bulan == 3) {
            if ($value < 55.3) {
                $data = "Sangat pendek";
            } else if ($value >= 55.3 && $value < 57.3) {
                $data = "Pendek";
            } else if ($value >= 57.3 && $value <= 67.6) {
                $data = "Normal";
            } else if ($value > 67.6) {
                $data = "Tinggi";
            }
        } else if ($bulan == 4) {
            if ($value < 57.6) {
                $data = "Sangat pendek";
            } else if ($value >= 57.6 && $value < 59.7) {
                $data = "Pendek";
            } else if ($value >= 59.7 && $value <= 70.1) {
                $data = "Normal";
            } else if ($value > 70.1) {
                $data = "Tinggi";
            }
        } else if ($bulan == 5) {
            if ($value < 59.6) {
                $data = "Sangat pendek";
            } else if ($value >= 59.6 && $value < 61.7) {
                $data = "Pendek";
            } else if ($value >= 61.7  && $value <= 72.2) {
                $data = "Normal";
            } else if ($value > 72.2) {
                $data = "Tinggi";
            }
        } else if ($bulan == 6) {
            if ($value < 61.2) {
                $data = "Sangat pendek";
            } else if ($value >= 61.2 && $value < 63.3) {
                $data = "Pendek";
            } else if ($value >= 63.3 && $value <= 74.0) {
                $data = "Normal";
            } else if ($value > 74.0) {
                $data = "Tinggi";
            }
        } else if ($bulan == 7) {
            if ($value < 62.7) {
                $data = "Sangat pendek";
            } else if ($value >= 62.7 && $value < 64.8) {
                $data = "Pendek";
            } else if ($value >= 64.8   && $value <= 75.7) {
                $data = "Normal";
            } else if ($value > 75.7) {
                $data = "Tinggi";
            }
        } else if ($bulan == 8) {
            if ($value < 64.0) {
                $data = "Sangat pendek";
            } else if ($value >= 64.0 && $value < 66.2) {
                $data = "Pendek";
            } else if ($value >= 66.2 && $value <= 77.2) {
                $data = "Normal";
            } else if ($value > 77.2) {
                $data = "Tinggi";
            }
        } else if ($bulan == 9) {
            if ($value < 65.2) {
                $data = "Sangat pendek";
            } else if ($value >= 65.2  && $value < 67.5) {
                $data = "Pendek";
            } else if ($value >= 67.5 && $value <= 78.7) {
                $data = "Normal";
            } else if ($value > 78.7) {
                $data = "Tinggi";
            }
        } else if ($bulan == 10) {
            if ($value < 66.4) {
                $data = "Sangat pendek";
            } else if ($value >= 66.4 && $value < 68.7) {
                $data = "Pendek";
            } else if ($value >= 68.7  && $value <= 80.1) {
                $data = "Normal";
            } else if ($value > 80.1) {
                $data = "Tinggi";
            }
        } else if ($bulan == 11) {
            if ($value < 67.6) {
                $data = "Sangat pendek";
            } else if ($value >= 67.6 && $value < 69.9) {
                $data = "Pendek";
            } else if ($value >= 69.9   && $value <= 81.5) {
                $data = "Normal";
            } else if ($value > 81.5) {
                $data = "Tinggi";
            }
        } else if ($bulan == 12) {
            if ($value < 68.6) {
                $data = "Sangat pendek";
            } else if ($value >= 68.6 && $value < 71.0) {
                $data = "Pendek";
            } else if ($value >= 71.0 && $value <= 82.9) {
                $data = "Normal";
            } else if ($value > 82.9) {
                $data = "Tinggi";
            }
        } else if ($bulan == 13) {
            if ($value < 69.6) {
                $data = "Sangat pendek";
            } else if ($value >= 69.6 && $value < 72.1) {
                $data = "Pendek";
            } else if ($value >= 72.1  && $value <= 84.2) {
                $data = "Normal";
            } else if ($value > 84.2) {
                $data = "Tinggi";
            }
        } else if ($bulan == 14) {
            if ($value < 70.6) {
                $data = "Sangat pendek";
            } else if ($value >= 70.6 && $value < 73.1) {
                $data = "Pendek";
            } else if ($value >= 73.1   && $value <= 85.5) {
                $data = "Normal";
            } else if ($value > 85.5) {
                $data = "Tinggi";
            }
        } else if ($bulan == 15) {
            if ($value < 71.6) {
                $data = "Sangat pendek";
            } else if ($value >= 71.6 && $value < 74.1) {
                $data = "Pendek";
            } else if ($value >= 74.1 && $value <= 86.7) {
                $data = "Normal";
            } else if ($value > 86.7) {
                $data = "Tinggi";
            }
        } else if ($bulan == 16) {
            if ($value < 72.5) {
                $data = "Sangat pendek";
            } else if ($value >= 72.5 && $value < 75.0) {
                $data = "Pendek";
            } else if ($value >= 75.0  && $value <= 88.0) {
                $data = "Normal";
            } else if ($value > 88.0) {
                $data = "Tinggi";
            }
        } else if ($bulan == 17) {
            if ($value < 73.3) {
                $data = "Sangat pendek";
            } else if ($value >= 73.3 && $value < 76.0) {
                $data = "Pendek";
            } else if ($value >= 76.0 && $value <= 89.2) {
                $data = "Normal";
            } else if ($value > 89.2) {
                $data = "Tinggi";
            }
        } else if ($bulan == 18) {
            if ($value < 74.2) {
                $data = "Sangat pendek";
            } else if ($value >= 74.2 && $value < 76.9) {
                $data = "Pendek";
            } else if ($value >= 76.9 && $value <= 90.4) {
                $data = "Normal";
            } else if ($value > 90.4) {
                $data = "Tinggi";
            }
        } else if ($bulan == 19) {
            if ($value < 75.0) {
                $data = "Sangat pendek";
            } else if ($value >= 75.0 && $value < 77.7) {
                $data = "Pendek";
            } else if ($value >= 77.7  && $value <= 91.5) {
                $data = "Normal";
            } else if ($value > 91.5) {
                $data = "Tinggi";
            }
        } else if ($bulan == 20) {
            if ($value < 75.8) {
                $data = "Sangat pendek";
            } else if ($value >= 75.8   && $value < 78.6) {
                $data = "Pendek";
            } else if ($value >= 78.6    && $value <= 92.6) {
                $data = "Normal";
            } else if ($value > 92.6) {
                $data = "Tinggi";
            }
        } else if ($bulan == 21) {
            if ($value < 76.5) {
                $data = "Sangat pendek";
            } else if ($value >= 76.5 && $value < 79.4) {
                $data = "Pendek";
            } else if ($value >= 79.4 && $value <= 93.8) {
                $data = "Normal";
            } else if ($value > 93.8) {
                $data = "Tinggi";
            }
        } else if ($bulan == 22) {
            if ($value < 77.2) {
                $data = "Sangat pendek";
            } else if ($value >= 77.2 && $value < 80.2) {
                $data = "Pendek";
            } else if ($value >= 80.2 && $value <= 94.9) {
                $data = "Normal";
            } else if ($value > 94.9) {
                $data = "Tinggi";
            }
        } else if ($bulan == 23) {
            if ($value < 78.0) {
                $data = "Sangat pendek";
            } else if ($value >= 78.0 && $value < 81.0) {
                $data = "Pendek";
            } else if ($value >= 81.0  && $value <= 95.9) {
                $data = "Normal";
            } else if ($value > 95.9) {
                $data = "Tinggi";
            }
        } else if ($bulan == 24) {
            $posisi = 0;
            if ($posisi == 0) {
                if ($value < 78.7) {
                    $data = "Sangat pendek";
                } else if ($value >= 78.7 && $value < 81.7) {
                    $data = "Pendek";
                } else if ($value >= 81.7  && $value <= 97.0) {
                    $data = "Normal";
                } else if ($value > 97.0) {
                    $data = "Tinggi";
                }
            } else if ($posisi == 1) {
                if ($value < 78.0) {
                    $data = "Sangat pendek";
                } else if ($value >= 78.0 && $value < 81.0) {
                    $data = "Pendek";
                } else if ($value >= 81.0  && $value <= 96.3) {
                    $data = "Normal";
                } else if ($value > 96.3) {
                    $data = "Tinggi";
                }
            }
        } else if ($bulan == 25) {
            if ($value < 78.6) {
                $data = "Sangat pendek";
            } else if ($value >= 78.6 && $value < 81.7) {
                $data = "Pendek";
            } else if ($value >= 81.7 && $value <= 97.3) {
                $data = "Normal";
            } else if ($value > 97.3) {
                $data = "Tinggi";
            }
        } else if ($bulan == 26) {
            if ($value < 79.3) {
                $data = "Sangat pendek";
            } else if ($value >= 79.3 && $value < 82.5) {
                $data = "Pendek";
            } else if ($value >= 82.5  && $value <= 98.3) {
                $data = "Normal";
            } else if ($value > 98.3) {
                $data = "Tinggi";
            }
        } else if ($bulan == 27) {
            if ($value < 79.9) {
                $data = "Sangat pendek";
            } else if ($value >= 79.9 && $value < 83.1) {
                $data = "Pendek";
            } else if ($value >= 83.1   && $value <= 99.3) {
                $data = "Normal";
            } else if ($value > 99.3) {
                $data = "Tinggi";
            }
        } else if ($bulan == 28) {
            if ($value < 80.5) {
                $data = "Sangat pendek";
            } else if ($value >= 80.5   && $value < 83.8) {
                $data = "Pendek";
            } else if ($value >= 83.8 && $value <= 100.3) {
                $data = "Normal";
            } else if ($value > 100.3) {
                $data = "Tinggi";
            }
        } else if ($bulan == 29) {
            if ($value < 81.1) {
                $data = "Sangat pendek";
            } else if ($value >= 81.1   && $value < 84.5) {
                $data = "Pendek";
            } else if ($value >= 84.5  && $value <= 101.2) {
                $data = "Normal";
            } else if ($value > 101.2) {
                $data = "Tinggi";
            }
        } else if ($bulan == 30) {
            if ($value < 81.7) {
                $data = "Sangat pendek";
            } else if ($value >= 81.7  && $value < 85.1) {
                $data = "Pendek";
            } else if ($value >= 85.1   && $value <= 102.1) {
                $data = "Normal";
            } else if ($value > 102.1) {
                $data = "Tinggi";
            }
        } else if ($bulan == 31) {
            if ($value < 82.3) {
                $data = "Sangat pendek";
            } else if ($value >= 82.3 && $value < 85.7) {
                $data = "Pendek";
            } else if ($value >= 85.7 && $value <= 103.0) {
                $data = "Normal";
            } else if ($value > 103.0) {
                $data = "Tinggi";
            }
        } else if ($bulan == 32) {
            if ($value < 82.8) {
                $data = "Sangat pendek";
            } else if ($value >= 82.8 && $value < 86.4) {
                $data = "Pendek";
            } else if ($value >= 86.4  && $value <= 103.9) {
                $data = "Normal";
            } else if ($value > 103.9) {
                $data = "Tinggi";
            }
        } else if ($bulan == 33) {
            if ($value < 83.4) {
                $data = "Sangat pendek";
            } else if ($value >= 83.4 && $value < 86.9) {
                $data = "Pendek";
            } else if ($value >= 86.9  && $value <= 104.8) {
                $data = "Normal";
            } else if ($value > 104.8) {
                $data = "Tinggi";
            }
        } else if ($bulan == 34) {
            if ($value < 83.9) {
                $data = "Sangat pendek";
            } else if ($value >= 83.9 && $value < 87.5) {
                $data = "Pendek";
            } else if ($value >= 87.5  && $value <= 105.6) {
                $data = "Normal";
            } else if ($value > 105.6) {
                $data = "Tinggi";
            }
        } else if ($bulan == 35) {
            if ($value < 84.4) {
                $data = "Sangat pendek";
            } else if ($value >= 84.4 && $value < 88.1) {
                $data = "Pendek";
            } else if ($value >= 88.1 && $value <= 106.4) {
                $data = "Normal";
            } else if ($value > 106.4) {
                $data = "Tinggi";
            }
        } else if ($bulan == 36) {
            if ($value < 85.0) {
                $data = "Sangat pendek";
            } else if ($value >= 85.0 && $value < 88.7) {
                $data = "Pendek";
            } else if ($value >= 88.7   && $value <= 107.2) {
                $data = "Normal";
            } else if ($value > 107.2) {
                $data = "Tinggi";
            }
        } else if ($bulan == 37) {
            if ($value < 85.5) {
                $data = "Sangat pendek";
            } else if ($value >= 85.5 && $value < 89.2) {
                $data = "Pendek";
            } else if ($value >= 89.2 && $value <= 108.0) {
                $data = "Normal";
            } else if ($value > 108.0) {
                $data = "Tinggi";
            }
        } else if ($bulan == 38) {
            if ($value < 86.0) {
                $data = "Sangat pendek";
            } else if ($value >= 86.0  && $value < 89.8) {
                $data = "Pendek";
            } else if ($value >= 89.8   && $value <= 108.8) {
                $data = "Normal";
            } else if ($value > 108.8) {
                $data = "Tinggi";
            }
        } else if ($bulan == 39) {
            if ($value < 86.5) {
                $data = "Sangat pendek";
            } else if ($value >= 86.5 && $value < 90.3) {
                $data = "Pendek";
            } else if ($value >= 90.3   && $value <= 109.5) {
                $data = "Normal";
            } else if ($value > 109.5) {
                $data = "Tinggi";
            }
        } else if ($bulan == 40) {
            if ($value < 87.0) {
                $data = "Sangat pendek";
            } else if ($value >= 87.0  && $value < 90.9) {
                $data = "Pendek";
            } else if ($value >= 90.9   && $value <= 110.3) {
                $data = "Normal";
            } else if ($value > 110.3) {
                $data = "Tinggi";
            }
        } else if ($bulan == 41) {
            if ($value < 87.5) {
                $data = "Sangat pendek";
            } else if ($value >= 87.5 && $value < 91.4) {
                $data = "Pendek";
            } else if ($value >= 91.4 && $value <= 111.0) {
                $data = "Normal";
            } else if ($value > 111.0) {
                $data = "Tinggi";
            }
        } else if ($bulan == 42) {
            if ($value < 88.0) {
                $data = "Sangat pendek";
            } else if ($value >= 88.0 && $value < 91.9) {
                $data = "Pendek";
            } else if ($value >= 91.9 && $value <= 111.7) {
                $data = "Normal";
            } else if ($value > 111.7) {
                $data = "Tinggi";
            }
        } else if ($bulan == 43) {
            if ($value < 88.4) {
                $data = "Sangat pendek";
            } else if ($value >= 88.4 && $value < 92.4) {
                $data = "Pendek";
            } else if ($value >= 92.4  && $value <= 112.5) {
                $data = "Normal";
            } else if ($value > 112.5) {
                $data = "Tinggi";
            }
        } else if ($bulan == 44) {
            if ($value < 88.9) {
                $data = "Sangat pendek";
            } else if ($value >= 88.9 && $value < 93.0) {
                $data = "Pendek";
            } else if ($value >= 93.0  && $value <= 113.2) {
                $data = "Normal";
            } else if ($value > 113.2) {
                $data = "Tinggi";
            }
        } else if ($bulan == 45) {
            if ($value < 89.4) {
                $data = "Sangat pendek";
            } else if ($value >= 89.4 && $value < 93.5) {
                $data = "Pendek";
            } else if ($value >= 93.5 && $value <= 113.9) {
                $data = "Normal";
            } else if ($value > 113.9) {
                $data = "Tinggi";
            }
        } else if ($bulan == 46) {
            if ($value < 89.8) {
                $data = "Sangat pendek";
            } else if ($value >= 89.8 && $value < 94.0) {
                $data = "Pendek";
            } else if ($value >= 94.0 && $value <= 114.6) {
                $data = "Normal";
            } else if ($value > 114.6) {
                $data = "Tinggi";
            }
        } else if ($bulan == 47) {
            if ($value < 90.3) {
                $data = "Sangat pendek";
            } else if ($value >= 90.3  && $value < 94.4) {
                $data = "Pendek";
            } else if ($value >= 94.4   && $value <= 115.2) {
                $data = "Normal";
            } else if ($value > 115.2) {
                $data = "Tinggi";
            }
        } else if ($bulan == 48) {
            if ($value < 90.7) {
                $data = "Sangat pendek";
            } else if ($value >= 90.7 && $value < 94.9) {
                $data = "Pendek";
            } else if ($value >= 94.9  && $value <= 115.9) {
                $data = "Normal";
            } else if ($value > 115.9) {
                $data = "Tinggi";
            }
        } else if ($bulan == 49) {
            if ($value < 91.2) {
                $data = "Sangat pendek";
            } else if ($value >= 91.2 && $value < 95.4) {
                $data = "Pendek";
            } else if ($value >= 95.4 && $value <= 116.6) {
                $data = "Normal";
            } else if ($value > 116.6) {
                $data = "Tinggi";
            }
        } else if ($bulan == 50) {
            if ($value < 91.6) {
                $data = "Sangat pendek";
            } else if ($value >= 91.6  && $value < 95.9) {
                $data = "Pendek";
            } else if ($value >= 95.9   && $value <= 117.3) {
                $data = "Normal";
            } else if ($value > 117.3) {
                $data = "Tinggi";
            }
        } else if ($bulan == 51) {
            if ($value < 92.1) {
                $data = "Sangat pendek";
            } else if ($value >= 92.1 && $value < 96.4) {
                $data = "Pendek";
            } else if ($value >= 96.4   && $value <= 117.9) {
                $data = "Normal";
            } else if ($value > 117.9) {
                $data = "Tinggi";
            }
        } else if ($bulan == 52) {
            if ($value < 92.5) {
                $data = "Sangat pendek";
            } else if ($value >= 92.5  && $value < 96.9) {
                $data = "Pendek";
            } else if ($value >= 96.9   && $value <= 118.6) {
                $data = "Normal";
            } else if ($value > 118.6) {
                $data = "Tinggi";
            }
        } else if ($bulan == 53) {
            if ($value < 93.0) {
                $data = "Sangat pendek";
            } else if ($value >= 93.0 && $value < 97.4) {
                $data = "Pendek";
            } else if ($value >= 97.4 && $value <= 119.2) {
                $data = "Normal";
            } else if ($value > 119.2) {
                $data = "Tinggi";
            }
        } else if ($bulan == 54) {
            if ($value < 93.4) {
                $data = "Sangat pendek";
            } else if ($value >= 93.4 && $value < 97.8) {
                $data = "Pendek";
            } else if ($value >= 97.8 && $value <= 119.9) {
                $data = "Normal";
            } else if ($value > 119.9) {
                $data = "Tinggi";
            }
        } else if ($bulan == 55) {
            if ($value < 93.9) {
                $data = "Sangat pendek";
            } else if ($value >= 93.9  && $value < 98.3) {
                $data = "Pendek";
            } else if ($value >= 98.3   && $value <= 120.6) {
                $data = "Normal";
            } else if ($value > 120.6) {
                $data = "Tinggi";
            }
        } else if ($bulan == 56) {
            if ($value < 94.3) {
                $data = "Sangat pendek";
            } else if ($value >= 94.3 && $value < 98.8) {
                $data = "Pendek";
            } else if ($value >= 98.8   && $value <= 121.2) {
                $data = "Normal";
            } else if ($value > 121.2) {
                $data = "Tinggi";
            }
        } else if ($bulan == 57) {
            if ($value < 94.7) {
                $data = "Sangat pendek";
            } else if ($value >= 94.7   && $value < 99.3) {
                $data = "Pendek";
            } else if ($value >= 99.3 && $value <= 121.9) {
                $data = "Normal";
            } else if ($value > 121.9) {
                $data = "Tinggi";
            }
        } else if ($bulan == 58) {
            if ($value < 95.2) {
                $data = "Sangat pendek";
            } else if ($value >= 95.2 && $value < 99.7) {
                $data = "Pendek";
            } else if ($value >= 99.7  && $value <= 122.6) {
                $data = "Normal";
            } else if ($value > 122.6) {
                $data = "Tinggi";
            }
        } else if ($bulan == 59) {
            if ($value < 95.6) {
                $data = "Sangat pendek";
            } else if ($value >= 95.6  && $value < 100.2) {
                $data = "Pendek";
            } else if ($value >= 100.2   && $value <= 123.2) {
                $data = "Normal";
            } else if ($value > 123.2) {
                $data = "Tinggi";
            }
        } else if ($bulan == 60) {
            if ($value < 96.1) {
                $data = "Sangat pendek";
            } else if ($value >= 96.1  && $value < 100.7) {
                $data = "Pendek";
            } else if ($value >= 100.7   && $value <= 123.9) {
                $data = "Normal";
            } else if ($value > 123.9) {
                $data = "Tinggi";
            }
        }

        return $data;
    }


    public static function IndeksMassaTubuhMenurutUmurBulanLakiLaki($value, $bulan, $data, $posisi)
    {
        if ($bulan == 0) {
            if ($value < 10.2) {
                $data = "Gizi Buruk";
            } else if ($value >= 10.2 && $value < 11.1) {
                $data = "Gizi Kurang";
            } else if ($value >= 11.1 && $value <= 14.8) {
                $data = "Gizi Baik";
            } else if ($value > 14.8 && $value <= 16.3) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  16.3 && $value <= 18.1) {
                $data = "Gizi Lebih";
            } else if ($value > 18.1) {
                $data = "Obesitas";
            }
        } else if ($bulan == 1) {
            if ($value < 11.3) {
                $data = "Gizi Buruk";
            } else if ($value >= 11.3 && $value < 12.4) {
                $data = "Gizi Kurang";
            } else if ($value >= 12.4 && $value <= 16.3) {
                $data = "Gizi Baik";
            } else if ($value > 16.3 && $value <= 17.8) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  17.8 && $value <= 19.4) {
                $data = "Gizi Lebih";
            } else if ($value > 19.4) {
                $data = "Obesitas";
            }
        } else if ($bulan == 2) {
            if ($value < 12.5) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.5 && $value < 13.7) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.7 && $value <= 17.8) {
                $data = "Gizi Baik";
            } else if ($value > 17.8 && $value <= 19.4) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  19.4 && $value <= 21.1) {
                $data = "Gizi Lebih";
            } else if ($value > 21.1) {
                $data = "Obesitas";
            }
        } else if ($bulan == 3) {
            if ($value < 13.1) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.1 && $value < 14.3) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.3 && $value <= 18.4) {
                $data = "Gizi Baik";
            } else if ($value > 18.4 && $value <= 20.0) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  20.0 && $value <= 21.8) {
                $data = "Gizi Lebih";
            } else if ($value > 21.8) {
                $data = "Obesitas";
            }
        } else if ($bulan == 4) {
            if ($value < 13.4) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.4 && $value < 14.5) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.5 && $value <= 18.7) {
                $data = "Gizi Baik";
            } else if ($value > 18.7 && $value <= 20.3) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  20.3 && $value <= 22.1) {
                $data = "Gizi Lebih";
            } else if ($value > 22.1) {
                $data = "Obesitas";
            }
        } else if ($bulan == 5) {
            if ($value < 13.5) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.5 && $value < 14.7) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.7 && $value <= 18.8) {
                $data = "Gizi Baik";
            } else if ($value > 18.8 && $value <= 20.5) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  20.5 && $value <= 22.3) {
                $data = "Gizi Lebih";
            } else if ($value > 22.3) {
                $data = "Obesitas";
            }
        } else if ($bulan == 6) {
            if ($value < 13.6) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.6 && $value < 14.7) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.7 && $value <= 18.8) {
                $data = "Gizi Baik";
            } else if ($value > 18.8 && $value <= 20.5) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  20.5 && $value <= 22.3) {
                $data = "Gizi Lebih";
            } else if ($value > 22.3) {
                $data = "Obesitas";
            }
        } else if ($bulan == 7) {
            if ($value < 13.7) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.7 && $value < 14.8) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.8 && $value <= 18.8) {
                $data = "Gizi Baik";
            } else if ($value > 18.8 && $value <= 20.5) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  20.5 && $value <= 22.3) {
                $data = "Gizi Lebih";
            } else if ($value > 22.3) {
                $data = "Obesitas";
            }
        } else if ($bulan == 8) {
            if ($value < 13.6) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.6 && $value < 14.7) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.7 && $value <= 18.7) {
                $data = "Gizi Baik";
            } else if ($value > 18.7 && $value <= 20.4) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  20.4 && $value <= 22.2) {
                $data = "Gizi Lebih";
            } else if ($value > 22.2) {
                $data = "Obesitas";
            }
        } else if ($bulan == 9) {
            if ($value < 13.6) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.6 && $value < 14.7) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.7 && $value <= 18.6) {
                $data = "Gizi Baik";
            } else if ($value > 18.6 && $value <= 20.3) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  20.3 && $value <= 22.1) {
                $data = "Gizi Lebih";
            } else if ($value > 22.1) {
                $data = "Obesitas";
            }
        } else if ($bulan == 10) {
            if ($value < 13.5) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.5 && $value < 14.6) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.6 && $value <= 18.5) {
                $data = "Gizi Baik";
            } else if ($value > 18.5 && $value <= 20.1) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  20.1 && $value <= 22.0) {
                $data = "Gizi Lebih";
            } else if ($value > 22.0) {
                $data = "Obesitas";
            }
        } else if ($bulan == 11) {
            if ($value < 13.4) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.4 && $value < 14.5) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.5 && $value <= 18.4) {
                $data = "Gizi Baik";
            } else if ($value > 18.4 && $value <= 20.0) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  20.0 && $value <= 21.8) {
                $data = "Gizi Lebih";
            } else if ($value > 21.8) {
                $data = "Obesitas";
            }
        } else if ($bulan == 12) {
            if ($value < 13.4) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.4 && $value < 14.4) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.4 && $value <= 18.2) {
                $data = "Gizi Baik";
            } else if ($value > 18.2 && $value <= 19.8) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  19.8 && $value <= 21.6) {
                $data = "Gizi Lebih";
            } else if ($value > 21.6) {
                $data = "Obesitas";
            }
        } else if ($bulan == 13) {
            if ($value < 13.3) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.3 && $value < 14.3) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.3 && $value <= 18.1) {
                $data = "Gizi Baik";
            } else if ($value > 18.1 && $value <= 19.7) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  19.7 && $value <= 21.5) {
                $data = "Gizi Lebih";
            } else if ($value > 21.5) {
                $data = "Obesitas";
            }
        } else if ($bulan == 14) {
            if ($value < 13.2) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.2 && $value < 14.2) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.2 && $value <= 18.0) {
                $data = "Gizi Baik";
            } else if ($value > 18.0 && $value <= 19.5) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  19.5 && $value <= 21.3) {
                $data = "Gizi Lebih";
            } else if ($value > 21.3) {
                $data = "Obesitas";
            }
        } else if ($bulan == 15) {
            if ($value < 13.1) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.1 && $value < 14.1) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.1 && $value <= 17.8) {
                $data = "Gizi Baik";
            } else if ($value > 17.8 && $value <= 19.4) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  19.4 && $value <= 21.2) {
                $data = "Gizi Lebih";
            } else if ($value > 21.2) {
                $data = "Obesitas";
            }
        } else if ($bulan == 16) {
            if ($value < 13.1) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.1 && $value < 14.0) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.0 && $value <= 17.7) {
                $data = "Gizi Baik";
            } else if ($value > 17.7 && $value <= 19.3) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  19.3 && $value <= 21.0) {
                $data = "Gizi Lebih";
            } else if ($value > 21.0) {
                $data = "Obesitas";
            }
        } else if ($bulan == 17) {
            if ($value < 13.0) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.0 && $value < 13.9) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.9 && $value <= 17.6) {
                $data = "Gizi Baik";
            } else if ($value > 17.6 && $value <= 19.1) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  19.1 && $value <= 20.9) {
                $data = "Gizi Lebih";
            } else if ($value > 20.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 18) {
            if ($value < 12.9) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.9 && $value < 13.9) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.9 && $value <= 17.5) {
                $data = "Gizi Baik";
            } else if ($value > 17.5 && $value <= 19.0) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  19.0 && $value <= 20.8) {
                $data = "Gizi Lebih";
            } else if ($value > 20.8) {
                $data = "Obesitas";
            }
        } else if ($bulan == 19) {
            if ($value < 12.9) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.9 && $value < 13.8) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.8 && $value <= 17.4) {
                $data = "Gizi Baik";
            } else if ($value > 17.4 && $value <= 18.9) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.9 && $value <= 20.7) {
                $data = "Gizi Lebih";
            } else if ($value > 20.7) {
                $data = "Obesitas";
            }
        } else if ($bulan == 20) {
            if ($value < 12.8) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.8 && $value < 13.7) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.7 && $value <= 17.3) {
                $data = "Gizi Baik";
            } else if ($value > 17.3 && $value <= 18.8) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.8 && $value <= 20.6) {
                $data = "Gizi Lebih";
            } else if ($value > 20.6) {
                $data = "Obesitas";
            }
        } else if ($bulan == 21) {
            if ($value < 12.8) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.8 && $value < 13.7) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.7 && $value <= 17.2) {
                $data = "Gizi Baik";
            } else if ($value > 17.2 && $value <= 18.7) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.7 && $value <= 20.5) {
                $data = "Gizi Lebih";
            } else if ($value > 20.5) {
                $data = "Obesitas";
            }
        } else if ($bulan == 22) {
            if ($value < 12.7) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.7 && $value < 13.6) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.6 && $value <= 17.2) {
                $data = "Gizi Baik";
            } else if ($value > 17.2 && $value <= 18.7) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.7 && $value <= 20.4) {
                $data = "Gizi Lebih";
            } else if ($value > 20.4) {
                $data = "Obesitas";
            }
        } else if ($bulan == 23) {
            if ($value < 12.7) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.7 && $value < 13.6) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.6 && $value <= 17.1) {
                $data = "Gizi Baik";
            } else if ($value > 17.1 && $value <= 18.6) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.6 && $value <= 20.3) {
                $data = "Gizi Lebih";
            } else if ($value > 20.3) {
                $data = "Obesitas";
            }
        } else if ($bulan == 24) {
            //0 Telentang 1 berdiri
            if ($posisi == 0) {
                if ($value < 12.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.7 && $value < 13.6) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.6 && $value <= 17.0) {
                    $data = "Gizi Baik";
                } else if ($value > 17.0 && $value <= 18.5) {
                    $data = "Beresiko Gizi Lebih";
                } else if ($value >  18.5 && $value <= 20.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 20.3) {
                    $data = "Obesitas";
                }
            } else if ($posisi == 1) {
                if ($value < 12.9) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.9 && $value < 13.8) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.8 && $value <= 17.3) {
                    $data = "Gizi Baik";
                } else if ($value > 17.3 && $value <= 18.9) {
                    $data = "Beresiko Gizi Lebih";
                } else if ($value >  18.9 && $value <= 20.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 20.6) {
                    $data = "Obesitas";
                }
            }
        } else if ($bulan == 25) {
            if ($value < 12.8) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.8 && $value < 13.8) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.8 && $value <= 17.3) {
                $data = "Gizi Baik";
            } else if ($value > 17.3 && $value <= 18.8) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.8 && $value <= 20.5) {
                $data = "Gizi Lebih";
            } else if ($value > 20.5) {
                $data = "Obesitas";
            }
        } else if ($bulan == 26) {
            if ($value < 12.8) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.8 && $value < 13.7) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.7 && $value <= 17.3) {
                $data = "Gizi Baik";
            } else if ($value > 17.3 && $value <= 18.8) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.8 && $value <= 20.5) {
                $data = "Gizi Lebih";
            } else if ($value > 20.5) {
                $data = "Obesitas";
            }
        } else if ($bulan == 27) {
            if ($value < 12.7) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.7 && $value < 13.7) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.7 && $value <= 17.2) {
                $data = "Gizi Baik";
            } else if ($value > 17.2 && $value <= 18.7) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.7 && $value <= 20.4) {
                $data = "Gizi Lebih";
            } else if ($value > 20.4) {
                $data = "Obesitas";
            }
        } else if ($bulan == 28) {
            if ($value < 12.7) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.7 && $value < 13.6) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.6 && $value <= 17.2) {
                $data = "Gizi Baik";
            } else if ($value > 17.2 && $value <= 18.7) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.7 && $value <= 20.4) {
                $data = "Gizi Lebih";
            } else if ($value > 20.4) {
                $data = "Obesitas";
            }
        } else if ($bulan == 29) {
            if ($value < 12.7) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.7 && $value < 13.6) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.6 && $value <= 17.1) {
                $data = "Gizi Baik";
            } else if ($value > 17.1 && $value <= 18.6) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.6 && $value <= 20.3) {
                $data = "Gizi Lebih";
            } else if ($value > 20.3) {
                $data = "Obesitas";
            }
        } else if ($bulan == 30) {
            if ($value < 12.6) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.6 && $value < 13.6) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.6 && $value <= 17.1) {
                $data = "Gizi Baik";
            } else if ($value > 17.1 && $value <= 18.6) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.6 && $value <= 20.2) {
                $data = "Gizi Lebih";
            } else if ($value > 20.2) {
                $data = "Obesitas";
            }
        } else if ($bulan == 31) {
            if ($value < 12.6) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.6 && $value < 13.5) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.5 && $value <= 17.1) {
                $data = "Gizi Baik";
            } else if ($value > 17.1 && $value <= 18.5) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.5 && $value <= 20.2) {
                $data = "Gizi Lebih";
            } else if ($value > 20.2) {
                $data = "Obesitas";
            }
        } else if ($bulan == 32) {
            if ($value < 12.5) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.5 && $value < 13.5) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.5 && $value <= 17.0) {
                $data = "Gizi Baik";
            } else if ($value > 17.0 && $value <= 18.5) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.5 && $value <= 20.1) {
                $data = "Gizi Lebih";
            } else if ($value > 20.1) {
                $data = "Obesitas";
            }
        } else if ($bulan == 33) {
            if ($value < 12.5) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.5 && $value < 13.5) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.5 && $value <= 17.0) {
                $data = "Gizi Baik";
            } else if ($value > 17.0 && $value <= 18.5) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.5 && $value <= 20.1) {
                $data = "Gizi Lebih";
            } else if ($value > 20.1) {
                $data = "Obesitas";
            }
        } else if ($bulan == 34) {
            if ($value < 12.5) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.5 && $value < 13.4) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.4 && $value <= 17.0) {
                $data = "Gizi Baik";
            } else if ($value > 17.0 && $value <= 18.4) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.4 && $value <= 20.0) {
                $data = "Gizi Lebih";
            } else if ($value > 20.0) {
                $data = "Obesitas";
            }
        } else if ($bulan == 35) {
            if ($value < 12.4) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.4 && $value < 13.4) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.4 && $value <= 16.9) {
                $data = "Gizi Baik";
            } else if ($value > 16.9 && $value <= 18.4) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.4 && $value <= 20.0) {
                $data = "Gizi Lebih";
            } else if ($value > 20.0) {
                $data = "Obesitas";
            }
        } else if ($bulan == 36) {
            if ($value < 12.4) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.4 && $value < 13.4) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.4 && $value <= 16.9) {
                $data = "Gizi Baik";
            } else if ($value > 16.9 && $value <= 18.4) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.4 && $value <= 20.0) {
                $data = "Gizi Lebih";
            } else if ($value > 20.0) {
                $data = "Obesitas";
            }
        } else if ($bulan == 37) {
            if ($value < 12.4) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.4 && $value < 13.3) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.3 && $value <= 16.9) {
                $data = "Gizi Baik";
            } else if ($value > 16.9 && $value <= 18.3) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.3 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 38) {
            if ($value < 12.3) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.3 && $value < 13.3) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.3 && $value <= 16.8) {
                $data = "Gizi Baik";
            } else if ($value > 16.8 && $value <= 18.3) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.3 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 39) {
            if ($value < 12.3) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.3 && $value < 13.3) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.3 && $value <= 16.8) {
                $data = "Gizi Baik";
            } else if ($value > 16.8 && $value <= 18.3) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value > 18.3 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 40) {
            if ($value < 12.3) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.3 && $value < 13.2) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.2 && $value <= 16.8) {
                $data = "Gizi Baik";
            } else if ($value > 16.8 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 41) {
            if ($value < 12.2) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.2 && $value < 13.2) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.2 && $value <= 16.8) {
                $data = "Gizi Baik";
            } else if ($value > 16.8 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 42) {
            if ($value < 12.2) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.2 && $value < 13.2) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.2 && $value <= 16.8) {
                $data = "Gizi Baik";
            } else if ($value > 16.8 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.8) {
                $data = "Gizi Lebih";
            } else if ($value > 19.8) {
                $data = "Obesitas";
            }
        } else if ($bulan == 43) {
            if ($value < 12.2) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.2 && $value < 13.2) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.2 && $value <= 16.7) {
                $data = "Gizi Baik";
            } else if ($value > 16.7 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.8) {
                $data = "Gizi Lebih";
            } else if ($value > 19.8) {
                $data = "Obesitas";
            }
        } else if ($bulan == 44) {
            if ($value < 12.2) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.2 && $value < 13.1) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.1 && $value <= 16.7) {
                $data = "Gizi Baik";
            } else if ($value > 16.7 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.8) {
                $data = "Gizi Lebih";
            } else if ($value > 19.8) {
                $data = "Obesitas";
            }
        } else if ($bulan == 45) {
            if ($value < 12.2) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.2 && $value < 13.1) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.1 && $value <= 16.7) {
                $data = "Gizi Baik";
            } else if ($value > 16.7 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.8) {
                $data = "Gizi Lebih";
            } else if ($value > 19.8) {
                $data = "Obesitas";
            }
        } else if ($bulan == 46) {
            if ($value < 12.1) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.1 && $value < 13.1) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.1 && $value <= 16.7) {
                $data = "Gizi Baik";
            } else if ($value > 16.7 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.8) {
                $data = "Gizi Lebih";
            } else if ($value > 19.8) {
                $data = "Obesitas";
            }
        } else if ($bulan == 47) {
            if ($value < 12.1) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.1 && $value < 13.1) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.1 && $value <= 16.7) {
                $data = "Gizi Baik";
            } else if ($value > 16.7 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 48) {
            if ($value < 12.1) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.1 && $value < 13.1) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.1 && $value <= 16.7) {
                $data = "Gizi Baik";
            } else if ($value > 16.7 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 49) {
            if ($value < 12.1) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.1 && $value < 13.0) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.0 && $value <= 16.7) {
                $data = "Gizi Baik";
            } else if ($value > 16.7 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 50) {
            if ($value < 12.1) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.1 && $value < 13.0) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.0 && $value <= 16.7) {
                $data = "Gizi Baik";
            } else if ($value > 16.7 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 51) {
            if ($value < 12.1) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.1 && $value < 13.0) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.0 && $value <= 16.6) {
                $data = "Gizi Baik";
            } else if ($value > 16.6 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value > 18.2 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 52) {
            if ($value < 12.0) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.0 && $value < 13.0) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.0 && $value <= 16.6) {
                $data = "Gizi Baik";
            } else if ($value > 16.6 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 53) {
            if ($value < 12.0) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.0 && $value < 13.0) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.0 && $value <= 16.6) {
                $data = "Gizi Baik";
            } else if ($value > 16.6 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 20.0) {
                $data = "Gizi Lebih";
            } else if ($value > 20.0) {
                $data = "Obesitas";
            }
        } else if ($bulan == 54) {
            if ($value < 12.0) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.0 && $value < 12.0) {
                $data = "Gizi Kurang";
            } else if ($value >= 12.0 && $value <= 16.6) {
                $data = "Gizi Baik";
            } else if ($value > 16.6 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 20.0) {
                $data = "Gizi Lebih";
            } else if ($value > 20.0) {
                $data = "Obesitas";
            }
        } else if ($bulan == 55) {
            if ($value < 12.0) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.0 && $value < 13.0) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.0 && $value <= 16.6) {
                $data = "Gizi Baik";
            } else if ($value > 16.6 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 20.0) {
                $data = "Gizi Lebih";
            } else if ($value > 20.0) {
                $data = "Obesitas";
            }
        } else if ($bulan == 56) {
            if ($value < 12.0) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.0 && $value < 12.9) {
                $data = "Gizi Kurang";
            } else if ($value >= 12.9 && $value <= 16.6) {
                $data = "Gizi Baik";
            } else if ($value > 16.6 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 20.1) {
                $data = "Gizi Lebih";
            } else if ($value > 20.1) {
                $data = "Obesitas";
            }
        } else if ($bulan == 57) {
            if ($value < 12.0) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.0 && $value < 12.9) {
                $data = "Gizi Kurang";
            } else if ($value >= 12.9 && $value <= 16.6) {
                $data = "Gizi Baik";
            } else if ($value > 16.6 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 20.1) {
                $data = "Gizi Lebih";
            } else if ($value > 20.1) {
                $data = "Obesitas";
            }
        } else if ($bulan == 58) {
            if ($value < 12.0) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.0 && $value < 12.9) {
                $data = "Gizi Kurang";
            } else if ($value >= 12.9 && $value <= 16.6) {
                $data = "Gizi Baik";
            } else if ($value > 16.6 && $value <= 18.3) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.3 && $value <= 20.2) {
                $data = "Gizi Lebih";
            } else if ($value > 20.2) {
                $data = "Obesitas";
            }
        } else if ($bulan == 59) {
            if ($value < 12.0) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.0 && $value < 12.9) {
                $data = "Gizi Kurang";
            } else if ($value >= 12.9 && $value <= 16.6) {
                $data = "Gizi Baik";
            } else if ($value > 16.6 && $value <= 18.3) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.3 && $value <= 20.2) {
                $data = "Gizi Lebih";
            } else if ($value > 20.2) {
                $data = "Obesitas";
            }
        } else if ($bulan == 60) {
            if ($value < 12.0) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.0 && $value < 12.9) {
                $data = "Gizi Kurang";
            } else if ($value >= 12.9 && $value <= 16.6) {
                $data = "Gizi Baik";
            } else if ($value > 16.6 && $value <= 18.3) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.3 && $value <= 20.3) {
                $data = "Gizi Lebih";
            } else if ($value > 20.3) {
                $data = "Obesitas";
            }
        }

        return $data;
    }

    public static function IndeksMassaTubuhMenurutUmurBulanPerempuan($value, $bulan, $data, $posisi)
    {
        if ($bulan == 0) {
            if ($value < 10.2) {
                $data = "Gizi Buruk";
            } else if ($value >= 10.2 && $value < 11.1) {
                $data = "Gizi Kurang";
            } else if ($value >= 11.1 && $value <= 14.8) {
                $data = "Gizi Baik";
            } else if ($value > 14.8 && $value <= 16.3) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  16.3 && $value <= 18.1) {
                $data = "Gizi Lebih";
            } else if ($value > 18.1) {
                $data = "Obesitas";
            }
        } else if ($bulan == 1) {
            if ($value < 11.3) {
                $data = "Gizi Buruk";
            } else if ($value >= 11.3 && $value < 12.4) {
                $data = "Gizi Kurang";
            } else if ($value >= 12.4 && $value <= 16.3) {
                $data = "Gizi Baik";
            } else if ($value > 16.3 && $value <= 17.8) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  17.8 && $value <= 19.4) {
                $data = "Gizi Lebih";
            } else if ($value > 19.4) {
                $data = "Obesitas";
            }
        } else if ($bulan == 2) {
            if ($value < 12.5) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.5 && $value < 13.7) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.7 && $value <= 17.8) {
                $data = "Gizi Baik";
            } else if ($value > 17.8 && $value <= 19.4) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  19.4 && $value <= 21.1) {
                $data = "Gizi Lebih";
            } else if ($value > 21.1) {
                $data = "Obesitas";
            }
        } else if ($bulan == 3) {
            if ($value < 13.1) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.1 && $value < 14.3) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.3 && $value <= 18.4) {
                $data = "Gizi Baik";
            } else if ($value > 18.4 && $value <= 20.0) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  20.0 && $value <= 21.8) {
                $data = "Gizi Lebih";
            } else if ($value > 21.8) {
                $data = "Obesitas";
            }
        } else if ($bulan == 4) {
            if ($value < 13.4) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.4 && $value < 14.5) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.5 && $value <= 18.7) {
                $data = "Gizi Baik";
            } else if ($value > 18.7 && $value <= 20.3) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  20.3 && $value <= 22.1) {
                $data = "Gizi Lebih";
            } else if ($value > 22.1) {
                $data = "Obesitas";
            }
        } else if ($bulan == 5) {
            if ($value < 13.5) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.5 && $value < 14.7) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.7 && $value <= 18.8) {
                $data = "Gizi Baik";
            } else if ($value > 18.8 && $value <= 20.5) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  20.5 && $value <= 22.3) {
                $data = "Gizi Lebih";
            } else if ($value > 22.3) {
                $data = "Obesitas";
            }
        } else if ($bulan == 6) {
            if ($value < 13.6) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.6 && $value < 14.7) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.7 && $value <= 18.8) {
                $data = "Gizi Baik";
            } else if ($value > 18.8 && $value <= 20.5) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  20.5 && $value <= 22.3) {
                $data = "Gizi Lebih";
            } else if ($value > 22.3) {
                $data = "Obesitas";
            }
        } else if ($bulan == 7) {
            if ($value < 13.7) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.7 && $value < 14.8) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.8 && $value <= 18.8) {
                $data = "Gizi Baik";
            } else if ($value > 18.8 && $value <= 20.5) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  20.5 && $value <= 22.3) {
                $data = "Gizi Lebih";
            } else if ($value > 22.3) {
                $data = "Obesitas";
            }
        } else if ($bulan == 8) {
            if ($value < 13.6) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.6 && $value < 14.7) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.7 && $value <= 18.7) {
                $data = "Gizi Baik";
            } else if ($value > 18.7 && $value <= 20.4) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  20.4 && $value <= 22.2) {
                $data = "Gizi Lebih";
            } else if ($value > 22.2) {
                $data = "Obesitas";
            }
        } else if ($bulan == 9) {
            if ($value < 13.6) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.6 && $value < 14.7) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.7 && $value <= 18.6) {
                $data = "Gizi Baik";
            } else if ($value > 18.6 && $value <= 20.3) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  20.3 && $value <= 22.1) {
                $data = "Gizi Lebih";
            } else if ($value > 22.1) {
                $data = "Obesitas";
            }
        } else if ($bulan == 10) {
            if ($value < 13.5) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.5 && $value < 14.6) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.6 && $value <= 18.5) {
                $data = "Gizi Baik";
            } else if ($value > 18.5 && $value <= 20.1) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  20.1 && $value <= 22.0) {
                $data = "Gizi Lebih";
            } else if ($value > 22.0) {
                $data = "Obesitas";
            }
        } else if ($bulan == 11) {
            if ($value < 13.4) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.4 && $value < 14.5) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.5 && $value <= 18.4) {
                $data = "Gizi Baik";
            } else if ($value > 18.4 && $value <= 20.0) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  20.0 && $value <= 21.8) {
                $data = "Gizi Lebih";
            } else if ($value > 21.8) {
                $data = "Obesitas";
            }
        } else if ($bulan == 12) {
            if ($value < 13.4) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.4 && $value < 14.4) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.4 && $value <= 18.2) {
                $data = "Gizi Baik";
            } else if ($value > 18.2 && $value <= 19.8) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  19.8 && $value <= 21.6) {
                $data = "Gizi Lebih";
            } else if ($value > 21.6) {
                $data = "Obesitas";
            }
        } else if ($bulan == 13) {
            if ($value < 13.3) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.3 && $value < 14.3) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.3 && $value <= 18.1) {
                $data = "Gizi Baik";
            } else if ($value > 18.1 && $value <= 19.7) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  19.7 && $value <= 21.5) {
                $data = "Gizi Lebih";
            } else if ($value > 21.5) {
                $data = "Obesitas";
            }
        } else if ($bulan == 14) {
            if ($value < 13.2) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.2 && $value < 14.2) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.2 && $value <= 18.0) {
                $data = "Gizi Baik";
            } else if ($value > 18.0 && $value <= 19.5) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  19.5 && $value <= 21.3) {
                $data = "Gizi Lebih";
            } else if ($value > 21.3) {
                $data = "Obesitas";
            }
        } else if ($bulan == 15) {
            if ($value < 13.1) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.1 && $value < 14.1) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.1 && $value <= 17.8) {
                $data = "Gizi Baik";
            } else if ($value > 17.8 && $value <= 19.4) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  19.4 && $value <= 21.2) {
                $data = "Gizi Lebih";
            } else if ($value > 21.2) {
                $data = "Obesitas";
            }
        } else if ($bulan == 16) {
            if ($value < 13.1) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.1 && $value < 14.0) {
                $data = "Gizi Kurang";
            } else if ($value >= 14.0 && $value <= 17.7) {
                $data = "Gizi Baik";
            } else if ($value > 17.7 && $value <= 19.3) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  19.3 && $value <= 21.0) {
                $data = "Gizi Lebih";
            } else if ($value > 21.0) {
                $data = "Obesitas";
            }
        } else if ($bulan == 17) {
            if ($value < 13.0) {
                $data = "Gizi Buruk";
            } else if ($value >= 13.0 && $value < 13.9) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.9 && $value <= 17.6) {
                $data = "Gizi Baik";
            } else if ($value > 17.6 && $value <= 19.1) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  19.1 && $value <= 20.9) {
                $data = "Gizi Lebih";
            } else if ($value > 20.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 18) {
            if ($value < 12.9) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.9 && $value < 13.9) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.9 && $value <= 17.5) {
                $data = "Gizi Baik";
            } else if ($value > 17.5 && $value <= 19.0) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  19.0 && $value <= 20.8) {
                $data = "Gizi Lebih";
            } else if ($value > 20.8) {
                $data = "Obesitas";
            }
        } else if ($bulan == 19) {
            if ($value < 12.9) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.9 && $value < 13.8) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.8 && $value <= 17.4) {
                $data = "Gizi Baik";
            } else if ($value > 17.4 && $value <= 18.9) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.9 && $value <= 20.7) {
                $data = "Gizi Lebih";
            } else if ($value > 20.7) {
                $data = "Obesitas";
            }
        } else if ($bulan == 20) {
            if ($value < 12.8) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.8 && $value < 13.7) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.7 && $value <= 17.3) {
                $data = "Gizi Baik";
            } else if ($value > 17.3 && $value <= 18.8) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.8 && $value <= 20.6) {
                $data = "Gizi Lebih";
            } else if ($value > 20.6) {
                $data = "Obesitas";
            }
        } else if ($bulan == 21) {
            if ($value < 12.8) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.8 && $value < 13.7) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.7 && $value <= 17.2) {
                $data = "Gizi Baik";
            } else if ($value > 17.2 && $value <= 18.7) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.7 && $value <= 20.5) {
                $data = "Gizi Lebih";
            } else if ($value > 20.5) {
                $data = "Obesitas";
            }
        } else if ($bulan == 22) {
            if ($value < 12.7) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.7 && $value < 13.6) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.6 && $value <= 17.2) {
                $data = "Gizi Baik";
            } else if ($value > 17.2 && $value <= 18.7) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.7 && $value <= 20.4) {
                $data = "Gizi Lebih";
            } else if ($value > 20.4) {
                $data = "Obesitas";
            }
        } else if ($bulan == 23) {
            if ($value < 12.7) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.7 && $value < 13.6) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.6 && $value <= 17.1) {
                $data = "Gizi Baik";
            } else if ($value > 17.1 && $value <= 18.6) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.6 && $value <= 20.3) {
                $data = "Gizi Lebih";
            } else if ($value > 20.3) {
                $data = "Obesitas";
            }
        } else if ($bulan == 24) {
            //0 Telentang 1 berdiri
            if ($posisi == 0) {
                if ($value < 12.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.7 && $value < 13.6) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.6 && $value <= 17.0) {
                    $data = "Gizi Baik";
                } else if ($value > 17.0 && $value <= 18.5) {
                    $data = "Beresiko Gizi Lebih";
                } else if ($value >  18.5 && $value <= 20.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 20.3) {
                    $data = "Obesitas";
                }
            } else if ($posisi == 1) {
                if ($value < 12.9) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.9 && $value < 13.8) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.8 && $value <= 17.3) {
                    $data = "Gizi Baik";
                } else if ($value > 17.3 && $value <= 18.9) {
                    $data = "Beresiko Gizi Lebih";
                } else if ($value >  18.9 && $value <= 20.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 20.6) {
                    $data = "Obesitas";
                }
            }
        } else if ($bulan == 25) {
            if ($value < 12.8) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.8 && $value < 13.8) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.8 && $value <= 17.3) {
                $data = "Gizi Baik";
            } else if ($value > 17.3 && $value <= 18.8) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.8 && $value <= 20.5) {
                $data = "Gizi Lebih";
            } else if ($value > 20.5) {
                $data = "Obesitas";
            }
        } else if ($bulan == 26) {
            if ($value < 12.8) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.8 && $value < 13.7) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.7 && $value <= 17.3) {
                $data = "Gizi Baik";
            } else if ($value > 17.3 && $value <= 18.8) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.8 && $value <= 20.5) {
                $data = "Gizi Lebih";
            } else if ($value > 20.5) {
                $data = "Obesitas";
            }
        } else if ($bulan == 27) {
            if ($value < 12.7) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.7 && $value < 13.7) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.7 && $value <= 17.2) {
                $data = "Gizi Baik";
            } else if ($value > 17.2 && $value <= 18.7) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.7 && $value <= 20.4) {
                $data = "Gizi Lebih";
            } else if ($value > 20.4) {
                $data = "Obesitas";
            }
        } else if ($bulan == 28) {
            if ($value < 12.7) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.7 && $value < 13.6) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.6 && $value <= 17.2) {
                $data = "Gizi Baik";
            } else if ($value > 17.2 && $value <= 18.7) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.7 && $value <= 20.4) {
                $data = "Gizi Lebih";
            } else if ($value > 20.4) {
                $data = "Obesitas";
            }
        } else if ($bulan == 29) {
            if ($value < 12.7) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.7 && $value < 13.6) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.6 && $value <= 17.1) {
                $data = "Gizi Baik";
            } else if ($value > 17.1 && $value <= 18.6) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.6 && $value <= 20.3) {
                $data = "Gizi Lebih";
            } else if ($value > 20.3) {
                $data = "Obesitas";
            }
        } else if ($bulan == 30) {
            if ($value < 12.6) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.6 && $value < 13.6) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.6 && $value <= 17.1) {
                $data = "Gizi Baik";
            } else if ($value > 17.1 && $value <= 18.6) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.6 && $value <= 20.2) {
                $data = "Gizi Lebih";
            } else if ($value > 20.2) {
                $data = "Obesitas";
            }
        } else if ($bulan == 31) {
            if ($value < 12.6) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.6 && $value < 13.5) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.5 && $value <= 17.1) {
                $data = "Gizi Baik";
            } else if ($value > 17.1 && $value <= 18.5) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.5 && $value <= 20.2) {
                $data = "Gizi Lebih";
            } else if ($value > 20.2) {
                $data = "Obesitas";
            }
        } else if ($bulan == 32) {
            if ($value < 12.5) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.5 && $value < 13.5) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.5 && $value <= 17.0) {
                $data = "Gizi Baik";
            } else if ($value > 17.0 && $value <= 18.5) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.5 && $value <= 20.1) {
                $data = "Gizi Lebih";
            } else if ($value > 20.1) {
                $data = "Obesitas";
            }
        } else if ($bulan == 33) {
            if ($value < 12.5) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.5 && $value < 13.5) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.5 && $value <= 17.0) {
                $data = "Gizi Baik";
            } else if ($value > 17.0 && $value <= 18.5) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.5 && $value <= 20.1) {
                $data = "Gizi Lebih";
            } else if ($value > 20.1) {
                $data = "Obesitas";
            }
        } else if ($bulan == 34) {
            if ($value < 12.5) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.5 && $value < 13.4) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.4 && $value <= 17.0) {
                $data = "Gizi Baik";
            } else if ($value > 17.0 && $value <= 18.4) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.4 && $value <= 20.0) {
                $data = "Gizi Lebih";
            } else if ($value > 20.0) {
                $data = "Obesitas";
            }
        } else if ($bulan == 35) {
            if ($value < 12.4) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.4 && $value < 13.4) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.4 && $value <= 16.9) {
                $data = "Gizi Baik";
            } else if ($value > 16.9 && $value <= 18.4) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.4 && $value <= 20.0) {
                $data = "Gizi Lebih";
            } else if ($value > 20.0) {
                $data = "Obesitas";
            }
        } else if ($bulan == 36) {
            if ($value < 12.4) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.4 && $value < 13.4) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.4 && $value <= 16.9) {
                $data = "Gizi Baik";
            } else if ($value > 16.9 && $value <= 18.4) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.4 && $value <= 20.0) {
                $data = "Gizi Lebih";
            } else if ($value > 20.0) {
                $data = "Obesitas";
            }
        } else if ($bulan == 37) {
            if ($value < 12.4) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.4 && $value < 13.3) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.3 && $value <= 16.9) {
                $data = "Gizi Baik";
            } else if ($value > 16.9 && $value <= 18.3) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.3 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 38) {
            if ($value < 12.3) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.3 && $value < 13.3) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.3 && $value <= 16.8) {
                $data = "Gizi Baik";
            } else if ($value > 16.8 && $value <= 18.3) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.3 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 39) {
            if ($value < 12.3) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.3 && $value < 13.3) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.3 && $value <= 16.8) {
                $data = "Gizi Baik";
            } else if ($value > 16.8 && $value <= 18.3) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value > 18.3 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 40) {
            if ($value < 12.3) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.3 && $value < 13.2) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.2 && $value <= 16.8) {
                $data = "Gizi Baik";
            } else if ($value > 16.8 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 41) {
            if ($value < 12.2) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.2 && $value < 13.2) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.2 && $value <= 16.8) {
                $data = "Gizi Baik";
            } else if ($value > 16.8 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 42) {
            if ($value < 12.2) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.2 && $value < 13.2) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.2 && $value <= 16.8) {
                $data = "Gizi Baik";
            } else if ($value > 16.8 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.8) {
                $data = "Gizi Lebih";
            } else if ($value > 19.8) {
                $data = "Obesitas";
            }
        } else if ($bulan == 43) {
            if ($value < 12.2) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.2 && $value < 13.2) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.2 && $value <= 16.7) {
                $data = "Gizi Baik";
            } else if ($value > 16.7 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.8) {
                $data = "Gizi Lebih";
            } else if ($value > 19.8) {
                $data = "Obesitas";
            }
        } else if ($bulan == 44) {
            if ($value < 12.2) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.2 && $value < 13.1) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.1 && $value <= 16.7) {
                $data = "Gizi Baik";
            } else if ($value > 16.7 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.8) {
                $data = "Gizi Lebih";
            } else if ($value > 19.8) {
                $data = "Obesitas";
            }
        } else if ($bulan == 45) {
            if ($value < 12.2) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.2 && $value < 13.1) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.1 && $value <= 16.7) {
                $data = "Gizi Baik";
            } else if ($value > 16.7 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.8) {
                $data = "Gizi Lebih";
            } else if ($value > 19.8) {
                $data = "Obesitas";
            }
        } else if ($bulan == 46) {
            if ($value < 12.1) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.1 && $value < 13.1) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.1 && $value <= 16.7) {
                $data = "Gizi Baik";
            } else if ($value > 16.7 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.8) {
                $data = "Gizi Lebih";
            } else if ($value > 19.8) {
                $data = "Obesitas";
            }
        } else if ($bulan == 47) {
            if ($value < 12.1) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.1 && $value < 13.1) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.1 && $value <= 16.7) {
                $data = "Gizi Baik";
            } else if ($value > 16.7 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 48) {
            if ($value < 12.1) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.1 && $value < 13.1) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.1 && $value <= 16.7) {
                $data = "Gizi Baik";
            } else if ($value > 16.7 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 49) {
            if ($value < 12.1) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.1 && $value < 13.0) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.0 && $value <= 16.7) {
                $data = "Gizi Baik";
            } else if ($value > 16.7 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 50) {
            if ($value < 12.1) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.1 && $value < 13.0) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.0 && $value <= 16.7) {
                $data = "Gizi Baik";
            } else if ($value > 16.7 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 51) {
            if ($value < 12.1) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.1 && $value < 13.0) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.0 && $value <= 16.6) {
                $data = "Gizi Baik";
            } else if ($value > 16.6 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value > 18.2 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 52) {
            if ($value < 12.0) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.0 && $value < 13.0) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.0 && $value <= 16.6) {
                $data = "Gizi Baik";
            } else if ($value > 16.6 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 19.9) {
                $data = "Gizi Lebih";
            } else if ($value > 19.9) {
                $data = "Obesitas";
            }
        } else if ($bulan == 53) {
            if ($value < 12.0) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.0 && $value < 13.0) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.0 && $value <= 16.6) {
                $data = "Gizi Baik";
            } else if ($value > 16.6 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 20.0) {
                $data = "Gizi Lebih";
            } else if ($value > 20.0) {
                $data = "Obesitas";
            }
        } else if ($bulan == 54) {
            if ($value < 12.0) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.0 && $value < 12.0) {
                $data = "Gizi Kurang";
            } else if ($value >= 12.0 && $value <= 16.6) {
                $data = "Gizi Baik";
            } else if ($value > 16.6 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 20.0) {
                $data = "Gizi Lebih";
            } else if ($value > 20.0) {
                $data = "Obesitas";
            }
        } else if ($bulan == 55) {
            if ($value < 12.0) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.0 && $value < 13.0) {
                $data = "Gizi Kurang";
            } else if ($value >= 13.0 && $value <= 16.6) {
                $data = "Gizi Baik";
            } else if ($value > 16.6 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 20.0) {
                $data = "Gizi Lebih";
            } else if ($value > 20.0) {
                $data = "Obesitas";
            }
        } else if ($bulan == 56) {
            if ($value < 12.0) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.0 && $value < 12.9) {
                $data = "Gizi Kurang";
            } else if ($value >= 12.9 && $value <= 16.6) {
                $data = "Gizi Baik";
            } else if ($value > 16.6 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 20.1) {
                $data = "Gizi Lebih";
            } else if ($value > 20.1) {
                $data = "Obesitas";
            }
        } else if ($bulan == 57) {
            if ($value < 12.0) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.0 && $value < 12.9) {
                $data = "Gizi Kurang";
            } else if ($value >= 12.9 && $value <= 16.6) {
                $data = "Gizi Baik";
            } else if ($value > 16.6 && $value <= 18.2) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.2 && $value <= 20.1) {
                $data = "Gizi Lebih";
            } else if ($value > 20.1) {
                $data = "Obesitas";
            }
        } else if ($bulan == 58) {
            if ($value < 12.0) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.0 && $value < 12.9) {
                $data = "Gizi Kurang";
            } else if ($value >= 12.9 && $value <= 16.6) {
                $data = "Gizi Baik";
            } else if ($value > 16.6 && $value <= 18.3) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.3 && $value <= 20.2) {
                $data = "Gizi Lebih";
            } else if ($value > 20.2) {
                $data = "Obesitas";
            }
        } else if ($bulan == 59) {
            if ($value < 12.0) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.0 && $value < 12.9) {
                $data = "Gizi Kurang";
            } else if ($value >= 12.9 && $value <= 16.6) {
                $data = "Gizi Baik";
            } else if ($value > 16.6 && $value <= 18.3) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.3 && $value <= 20.2) {
                $data = "Gizi Lebih";
            } else if ($value > 20.2) {
                $data = "Obesitas";
            }
        } else if ($bulan == 60) {
            if ($value < 12.0) {
                $data = "Gizi Buruk";
            } else if ($value >= 12.0 && $value < 12.9) {
                $data = "Gizi Kurang";
            } else if ($value >= 12.9 && $value <= 16.6) {
                $data = "Gizi Baik";
            } else if ($value > 16.6 && $value <= 18.3) {
                $data = "Beresiko Gizi Lebih";
            } else if ($value >  18.3 && $value <= 20.3) {
                $data = "Gizi Lebih";
            } else if ($value > 20.3) {
                $data = "Obesitas";
            }
        }

        return $data;
    }

    public static function IndeksMassaTubuhMenurutUmurTahunPerempuan($value, $bulan, $data, $tahun)
    {
        if ($tahun == 5) {
            if ($bulan == 1) {
                if ($value < 12.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.6) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.6  && $value <= 18.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 18.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 12.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.6) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.6  && $value <= 18.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 18.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 12.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.7 && $value <= 18.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 18.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 12.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.7 && $value <= 18.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 18.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 12.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.7 && $value <= 18.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 18.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 12.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.7 && $value <= 18.4) {
                    $data = "Gizi Lebih";
                } else if ($value > 18.4) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 12.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.7  && $value <= 18.4) {
                    $data = "Gizi Lebih";
                } else if ($value > 18.4) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 12.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.7  && $value <= 18.4) {
                    $data = "Gizi Lebih";
                } else if ($value > 18.4) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 12.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.7  && $value <= 18.4) {
                    $data = "Gizi Lebih";
                } else if ($value > 18.4) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 12.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.7 && $value <= 18.5) {
                    $data = "Gizi Lebih";
                } else if ($value > 18.5) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 12.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.7 && $value <= 18.5) {
                    $data = "Gizi Lebih";
                } else if ($value > 18.5) {
                    $data = "Obesitas";
                }
            }
        } else if ($tahun == 6) {
            if ($bulan == 0) {
                if ($value < 11.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.7 && $value < 12.7) {
                    $data = "Gizi Kurang";
                } else if ($value >= 12.7 && $value < 17.0) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.0   && $value <= 19.2) {
                    $data = "Gizi Lebih";
                } else if ($value > 19.2) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 11.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.7 && $value < 12.7) {
                    $data = "Gizi Kurang";
                } else if ($value >= 12.7 && $value < 17.0) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.0   && $value <= 19.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 19.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 11.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.7 && $value < 12.7) {
                    $data = "Gizi Kurang";
                } else if ($value >= 12.7 && $value < 17.0) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.0   && $value <= 19.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 19.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 11.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.7 && $value < 12.7) {
                    $data = "Gizi Kurang";
                } else if ($value >= 12.7 && $value < 17.1) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.1 && $value <= 19.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 19.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 11.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.7 && $value < 12.7) {
                    $data = "Gizi Kurang";
                } else if ($value >= 12.7  && $value < 17.1) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.1 && $value <= 19.4) {
                    $data = "Gizi Lebih";
                } else if ($value > 19.4) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 11.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.7 && $value < 12.7) {
                    $data = "Gizi Kurang";
                } else if ($value >= 12.7  && $value < 17.1) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.1 && $value <= 19.4) {
                    $data = "Gizi Lebih";
                } else if ($value > 19.4) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 11.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.7 && $value < 12.7) {
                    $data = "Gizi Kurang";
                } else if ($value >= 12.7  && $value < 17.1) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.1 && $value <= 19.5) {
                    $data = "Gizi Lebih";
                } else if ($value > 19.5) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 11.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.7 && $value < 12.7) {
                    $data = "Gizi Kurang";
                } else if ($value >= 12.7  && $value < 17.2) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.2  && $value <= 19.5) {
                    $data = "Gizi Lebih";
                } else if ($value > 19.5) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 11.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.7 && $value < 12.7) {
                    $data = "Gizi Kurang";
                } else if ($value >= 12.7  && $value < 17.2) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.2  && $value <= 19.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 19.6) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 11.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.7 && $value < 12.7) {
                    $data = "Gizi Kurang";
                } else if ($value >= 12.7  && $value < 17.2) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.2   && $value <= 19.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 19.6) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 11.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.7 && $value < 12.7) {
                    $data = "Gizi Kurang";
                } else if ($value >= 12.7  && $value < 17.2) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.2  && $value <= 19.7) {
                    $data = "Gizi Lebih";
                } else if ($value > 19.7) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 11.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.7 && $value < 12.7) {
                    $data = "Gizi Kurang";
                } else if ($value >= 12.7  && $value < 17.3) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.3 && $value <= 19.7) {
                    $data = "Gizi Lebih";
                } else if ($value > 19.7) {
                    $data = "Obesitas";
                }
            }
        } else if ($tahun == 7) {
            if ($bulan == 0) {
                if ($value < 11.8) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.8 && $value < 12.7) {
                    $data = "Gizi Kurang";
                } else if ($value >= 12.7 && $value < 17.3) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.3 && $value <= 19.8) {
                    $data = "Gizi Lebih";
                } else if ($value > 19.8) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 11.8) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.8 && $value < 17.3) {
                    $data = "Gizi Kurang";
                } else if ($value >= 17.3 && $value < 17.1) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.1 && $value <= 19.8) {
                    $data = "Gizi Lebih";
                } else if ($value > 19.8) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 11.8) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.8 && $value < 17.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 17.4 && $value < 17.1) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.1   && $value <= 19.9) {
                    $data = "Gizi Lebih";
                } else if ($value > 19.9) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 11.8) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.8 && $value < 17.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 17.4 && $value < 17.1) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.1 && $value <= 20.0) {
                    $data = "Gizi Lebih";
                } else if ($value > 20.0) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 11.8) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.8 && $value < 17.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 17.4  && $value < 17.2) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.2  && $value <= 20.0) {
                    $data = "Gizi Lebih";
                } else if ($value > 20.0) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 11.8) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.8 && $value < 17.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 17.5  && $value < 17.2) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.2  && $value <= 20.1) {
                    $data = "Gizi Lebih";
                } else if ($value > 20.1) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 11.8) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.8 && $value < 17.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 17.5  && $value < 17.2) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.2  && $value <= 20.1) {
                    $data = "Gizi Lebih";
                } else if ($value > 20.1) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 11.8) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.8 && $value < 17.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 17.5  && $value < 17.3) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.3  && $value <= 20.2) {
                    $data = "Gizi Lebih";
                } else if ($value > 20.2) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 11.8) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.8 && $value < 12.8) {
                    $data = "Gizi Kurang";
                } else if ($value >= 12.8  && $value < 17.6) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.6  && $value <= 20.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 20.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 11.8) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.8 && $value < 12.8) {
                    $data = "Gizi Kurang";
                } else if ($value >= 12.8  && $value < 17.6) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.6  && $value <= 20.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 20.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 11.9) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.9 && $value < 12.9) {
                    $data = "Gizi Kurang";
                } else if ($value >= 12.9  && $value < 17.6) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.6 && $value <= 20.4) {
                    $data = "Gizi Lebih";
                } else if ($value > 20.4) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 11.9) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.9 && $value < 12.9) {
                    $data = "Gizi Kurang";
                } else if ($value >= 12.9  && $value < 17.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.7 && $value <= 20.5) {
                    $data = "Gizi Lebih";
                } else if ($value > 20.5) {
                    $data = "Obesitas";
                }
            }
        } else if ($tahun == 8) {
            if ($bulan == 0) {
                if ($value < 11.9) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.9 && $value < 12.9) {
                    $data = "Gizi Kurang";
                } else if ($value >= 12.9 && $value < 17.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.7 && $value <= 20.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 20.6) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 11.9) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.9 && $value < 12.9) {
                    $data = "Gizi Kurang";
                } else if ($value >= 12.9 && $value < 17.8) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.8 && $value <= 20.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 20.6) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 11.9) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.9 && $value < 12.9) {
                    $data = "Gizi Kurang";
                } else if ($value >= 12.9 && $value < 17.8) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.8 && $value <= 20.7) {
                    $data = "Gizi Lebih";
                } else if ($value > 20.7) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 11.9) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.9 && $value < 12.9) {
                    $data = "Gizi Kurang";
                } else if ($value >= 12.9 && $value < 17.9) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.9 && $value <= 20.8) {
                    $data = "Gizi Lebih";
                } else if ($value > 20.8) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 11.9) {
                    $data = "Gizi Buruk";
                } else if ($value >= 11.9 && $value < 13.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 17.9) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.9 && $value <= 20.9) {
                    $data = "Gizi Lebih";
                } else if ($value > 20.9) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 12.0) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.0 && $value < 13.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 18.0) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.0 && $value <= 20.9) {
                    $data = "Gizi Lebih";
                } else if ($value > 20.9) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 12.0) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.0 && $value < 13.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 18.0) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.0  && $value <= 21.0) {
                    $data = "Gizi Lebih";
                } else if ($value > 21.0) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 12.0) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.0 && $value < 13.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 18.1) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.1  && $value <= 21.1) {
                    $data = "Gizi Lebih";
                } else if ($value > 21.1) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 12.0) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.0 && $value < 13.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 18.1) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.1  && $value <= 21.2) {
                    $data = "Gizi Lebih";
                } else if ($value > 21.2) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 12.0) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.0 && $value < 13.1) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.1 && $value < 18.2) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.2  && $value <= 21.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 21.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 12.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.1) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.1 && $value < 18.2) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.2 && $value <= 21.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 21.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 12.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.1) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.1 && $value < 18.3) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.3 && $value <= 21.4) {
                    $data = "Gizi Lebih";
                } else if ($value > 21.4) {
                    $data = "Obesitas";
                }
            }
        } else if ($tahun == 9) {
            if ($bulan == 0) {
                if ($value < 12.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.1) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.1  && $value < 18.3) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.3 && $value <= 21.5) {
                    $data = "Gizi Lebih";
                } else if ($value > 21.5) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 12.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.2) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.2 && $value < 18.4) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.4 && $value <= 21.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 21.6) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 12.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.2) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.2 && $value < 18.4) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.4 && $value <= 21.7) {
                    $data = "Gizi Lebih";
                } else if ($value > 21.7) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 12.2) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.2 && $value < 13.2) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.2 && $value < 18.5) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.5 && $value <= 21.8) {
                    $data = "Gizi Lebih";
                } else if ($value > 21.8) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 12.2) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.2 && $value < 13.2) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.2 && $value < 18.6) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.6 && $value <= 21.9) {
                    $data = "Gizi Lebih";
                } else if ($value > 21.9) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 12.2) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.2 && $value < 13.3) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.3 && $value < 18.6) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.6 && $value <= 21.9) {
                    $data = "Gizi Lebih";
                } else if ($value > 21.9) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 12.2) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.2 && $value < 13.3) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.3 && $value < 18.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.7 && $value <= 22.0) {
                    $data = "Gizi Lebih";
                } else if ($value > 22.0) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 12.3) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.3 && $value < 13.3) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.3 && $value < 18.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.7 && $value <= 22.1) {
                    $data = "Gizi Lebih";
                } else if ($value > 22.1) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 12.3) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.3 && $value < 13.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.4 && $value < 18.8) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.8  && $value <= 22.2) {
                    $data = "Gizi Lebih";
                } else if ($value > 22.2) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 12.3) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.3 && $value < 13.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.4 && $value < 18.8) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.8  && $value <= 22.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 22.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 12.3) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.3 && $value < 13.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.4 && $value < 18.9) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.9 && $value <= 22.4) {
                    $data = "Gizi Lebih";
                } else if ($value > 22.4) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 12.4) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.4 && $value < 13.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.4 && $value < 19.0) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.0 && $value <= 22.5) {
                    $data = "Gizi Lebih";
                } else if ($value > 22.5) {
                    $data = "Obesitas";
                }
            }
        } else if ($tahun == 10) {
            if ($bulan == 0) {
                if ($value < 12.4) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.4 && $value < 13.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.5 && $value < 19.0) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.0 && $value <= 22.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 22.6) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 12.4) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.4 && $value < 13.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.5 && $value < 19.1) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.1 && $value <= 22.7) {
                    $data = "Gizi Lebih";
                } else if ($value > 22.7) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 12.4) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.4 && $value < 13.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.5 && $value < 19.2) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.2 && $value <= 22.8) {
                    $data = "Gizi Lebih";
                } else if ($value > 22.8) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 12.5) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.5 && $value < 13.6) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.6 && $value < 19.2) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.2 && $value <= 22.8) {
                    $data = "Gizi Lebih";
                } else if ($value > 22.8) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 12.5) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.5 && $value < 13.6) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.6 && $value < 19.3) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.3 && $value <= 22.9) {
                    $data = "Gizi Lebih";
                } else if ($value > 22.9) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 12.5) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.5 && $value < 13.6) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.6 && $value < 19.4) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.4 && $value <= 23.0) {
                    $data = "Gizi Lebih";
                } else if ($value > 23.0) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 12.5) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.5 && $value < 13.7) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.7 && $value < 19.4) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.4 && $value <= 23.1) {
                    $data = "Gizi Lebih";
                } else if ($value > 23.1) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 12.6) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.6  && $value < 13.7) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.7 && $value < 19.5) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.5 && $value <= 23.2) {
                    $data = "Gizi Lebih";
                } else if ($value > 23.2) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 12.6) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.6 && $value < 13.7) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.7 && $value < 19.6) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.6  && $value <= 23.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 23.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 12.6) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.6 && $value < 13.8) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.8 && $value < 19.6) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.6  && $value <= 23.4) {
                    $data = "Gizi Lebih";
                } else if ($value > 23.4) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 12.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.7 && $value < 13.8) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.8 && $value < 19.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.7 && $value <= 23.5) {
                    $data = "Gizi Lebih";
                } else if ($value > 23.5) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 12.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.7 && $value < 13.8) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.8 && $value < 19.8) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.8 && $value <= 23.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 23.6) {
                    $data = "Obesitas";
                }
            }
        } else if ($tahun == 11) {
            if ($bulan == 0) {
                if ($value < 12.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.7 && $value < 13.9) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.9 && $value < 19.9) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.9 && $value <= 23.7) {
                    $data = "Gizi Lebih";
                } else if ($value > 23.7) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 12.8) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.8 && $value < 13.9) {
                    $data = "Gizi Kurang";
                } else if ($value >= 13.9 && $value < 19.9) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.9 && $value <= 23.8) {
                    $data = "Gizi Lebih";
                } else if ($value > 23.8) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 12.8) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.8 && $value < 14.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.0 && $value < 20.0) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.0 && $value <= 23.9) {
                    $data = "Gizi Lebih";
                } else if ($value > 23.9) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 12.8) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.8 && $value < 14.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.0 && $value < 20.1) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.1 && $value <= 24.0) {
                    $data = "Gizi Lebih";
                } else if ($value > 24.0) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 12.9) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.9 && $value < 14.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.0 && $value < 20.2) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.2 && $value <= 24.1) {
                    $data = "Gizi Lebih";
                } else if ($value > 24.1) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 12.9) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.9 && $value < 14.1) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.1 && $value < 20.2) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.2 && $value <= 24.2) {
                    $data = "Gizi Lebih";
                } else if ($value > 24.2) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 12.9) {
                    $data = "Gizi Buruk";
                } else if ($value >= 12.9 && $value < 14.1) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.1 && $value < 20.3) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.3 && $value <= 24.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 24.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 13.0) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.0 && $value < 14.2) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.2 && $value < 20.4) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.4 && $value <= 24.4) {
                    $data = "Gizi Lebih";
                } else if ($value > 24.4) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 13.0) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.0 && $value < 14.2) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.2 && $value < 20.5) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.5 && $value <= 24.5) {
                    $data = "Gizi Lebih";
                } else if ($value > 24.5) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 13.0) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.0 && $value < 14.3) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.3 && $value < 20.6) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.6  && $value <= 24.7) {
                    $data = "Gizi Lebih";
                } else if ($value > 24.7) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 13.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.1  && $value < 14.3) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.3 && $value < 20.6) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.6 && $value <= 24.8) {
                    $data = "Gizi Lebih";
                } else if ($value > 24.8) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 13.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.1 && $value < 14.3) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.3 && $value < 20.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.7 && $value <= 24.9) {
                    $data = "Gizi Lebih";
                } else if ($value > 24.9) {
                    $data = "Obesitas";
                }
            }
        } else if ($tahun == 12) {
            if ($bulan == 0) {
                if ($value < 13.2) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.2 && $value < 14.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.4 && $value < 20.8) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.8 && $value <= 25.0) {
                    $data = "Gizi Lebih";
                } else if ($value > 25.0) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 13.2) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.2 && $value < 14.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.4 && $value < 20.9) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.9 && $value <= 25.1) {
                    $data = "Gizi Lebih";
                } else if ($value > 25.1) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 13.2) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.2 && $value < 14.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.5 && $value < 21.0) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.0 && $value <= 25.2) {
                    $data = "Gizi Lebih";
                } else if ($value > 25.2) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 13.3) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.3 && $value < 14.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.5 && $value < 21.1) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.1  && $value <= 25.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 25.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 13.3) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.3 && $value < 14.6) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.6 && $value < 21.1) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.1 && $value <= 25.4) {
                    $data = "Gizi Lebih";
                } else if ($value > 25.4) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 13.3) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.3 && $value < 14.6) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.6 && $value < 21.2) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.2 && $value <= 25.5) {
                    $data = "Gizi Lebih";
                } else if ($value > 25.5) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 13.4) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.4 && $value < 14.7) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.7 && $value < 21.3) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.3 && $value <= 25.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 25.6) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 13.4) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.4 && $value < 14.7) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.7 && $value < 21.4) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.4 && $value <= 25.7) {
                    $data = "Gizi Lebih";
                } else if ($value > 25.7) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 13.5) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.5 && $value < 14.8) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.8 && $value < 21.5) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.5 && $value <= 25.8) {
                    $data = "Gizi Lebih";
                } else if ($value > 25.8) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 13.5) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.5 && $value < 14.8) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.8 && $value < 21.6) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.6  && $value <= 25.9) {
                    $data = "Gizi Lebih";
                } else if ($value > 25.9) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 13.5) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.5 && $value < 14.8) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.8 && $value < 21.6) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.6 && $value <= 26.0) {
                    $data = "Gizi Lebih";
                } else if ($value > 26.0) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 13.6) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.6 && $value < 14.9) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.9 && $value < 21.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.7 && $value <= 26.1) {
                    $data = "Gizi Lebih";
                } else if ($value > 26.1) {
                    $data = "Obesitas";
                }
            }
        } else if ($tahun == 13) {
            if ($bulan == 0) {
                if ($value < 13.6) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.6 && $value < 14.9) {
                    $data = "Gizi Kurang";
                } else if ($value >= 14.9 && $value < 21.8) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.8 && $value <= 26.2) {
                    $data = "Gizi Lebih";
                } else if ($value > 26.2) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 13.6) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.6 && $value < 15.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.0  && $value < 21.9) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.9 && $value <= 26.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 26.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 13.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.7 && $value < 15.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.0  && $value < 22.0) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.0 && $value <= 26.4) {
                    $data = "Gizi Lebih";
                } else if ($value > 26.4) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 13.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.7 && $value < 15.1) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.1 && $value < 22.0) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.0  && $value <= 26.5) {
                    $data = "Gizi Lebih";
                } else if ($value > 26.5) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 13.8) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.8 && $value < 15.1) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.1 && $value < 22.1) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.1 && $value <= 26.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 26.6) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 13.8) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.8 && $value < 15.2) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.2 && $value < 22.2) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.2 && $value <= 26.7) {
                    $data = "Gizi Lebih";
                } else if ($value > 26.7) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 13.8) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.8 && $value < 15.2) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.2 && $value < 22.3) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.3 && $value <= 26.8) {
                    $data = "Gizi Lebih";
                } else if ($value > 26.8) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 13.9) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.9 && $value < 15.2) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.2 && $value < 22.4) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.4 && $value <= 26.9) {
                    $data = "Gizi Lebih";
                } else if ($value > 26.9) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 13.9) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.9 && $value < 15.3) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.3 && $value < 22.4) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.4 && $value <= 27.0) {
                    $data = "Gizi Lebih";
                } else if ($value > 27.0) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 13.9) {
                    $data = "Gizi Buruk";
                } else if ($value >= 13.9 && $value < 15.3) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.3 && $value < 22.5) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.5  && $value <= 27.1) {
                    $data = "Gizi Lebih";
                } else if ($value > 27.1) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 14.0) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.0 && $value < 15.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.4 && $value < 22.6) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.6 && $value <= 27.1) {
                    $data = "Gizi Lebih";
                } else if ($value > 27.1) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 14.0) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.0 && $value < 15.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.4 && $value < 22.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.7 && $value <= 27.2) {
                    $data = "Gizi Lebih";
                } else if ($value > 27.2) {
                    $data = "Obesitas";
                }
            }
        } else if ($tahun == 14) {
            if ($bulan == 0) {
                if ($value < 14.0) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.0 && $value < 15.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.4 && $value < 22.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.7 && $value <= 27.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 27.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 14.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.1 && $value < 15.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.5 && $value < 22.8) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.8 && $value <= 27.4) {
                    $data = "Gizi Lebih";
                } else if ($value > 27.4) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 14.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.1 && $value < 15.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.5  && $value < 22.9) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.9 && $value <= 27.5) {
                    $data = "Gizi Lebih";
                } else if ($value > 27.5) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 14.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.1 && $value < 15.6) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.6 && $value < 22.9) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.9  && $value <= 27.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 27.6) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 14.1) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.1 && $value < 15.6) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.6 && $value < 23.0) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.0 && $value <= 27.7) {
                    $data = "Gizi Lebih";
                } else if ($value > 27.7) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 14.2) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.2 && $value < 15.6) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.6 && $value < 23.1) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.1 && $value <= 27.7) {
                    $data = "Gizi Lebih";
                } else if ($value > 27.7) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 14.2) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.2 && $value < 15.7) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.7 && $value < 23.1) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.1 && $value <= 27.8) {
                    $data = "Gizi Lebih";
                } else if ($value > 27.8) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 14.2) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.2 && $value < 15.7) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.7 && $value < 23.2) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.2 && $value <= 27.9) {
                    $data = "Gizi Lebih";
                } else if ($value > 27.9) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 14.3) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.3 && $value < 15.7) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.7 && $value < 23.3) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.3 && $value <= 28.0) {
                    $data = "Gizi Lebih";
                } else if ($value > 28.0) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 14.3) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.3 && $value < 15.8) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.8 && $value < 23.3) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.3  && $value <= 28.0) {
                    $data = "Gizi Lebih";
                } else if ($value > 26.7) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 14.3) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.3 && $value < 15.8) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.8 && $value < 23.4) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.4 && $value <= 28.1) {
                    $data = "Gizi Lebih";
                } else if ($value > 28.1) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 14.3) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.3 && $value < 15.8) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.8 && $value < 23.5) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.5 && $value <= 28.2) {
                    $data = "Gizi Lebih";
                } else if ($value > 28.2) {
                    $data = "Obesitas";
                }
            }
        } else if ($tahun == 15) {
            if ($bulan == 0) {
                if ($value < 14.4) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.4 && $value < 15.9) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.9 && $value < 23.5) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.5 && $value <= 28.2) {
                    $data = "Gizi Lebih";
                } else if ($value > 28.2) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 14.4) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.4 && $value < 15.9) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.9  && $value < 23.6) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.6 && $value <= 28.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 28.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 14.4) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.4 && $value < 15.9) {
                    $data = "Gizi Kurang";
                } else if ($value >= 15.9   && $value < 23.6) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.6 && $value <= 28.4) {
                    $data = "Gizi Lebih";
                } else if ($value > 28.4) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 14.4) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.4 && $value < 16.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.0 && $value < 23.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.7  && $value <= 28.4) {
                    $data = "Gizi Lebih";
                } else if ($value > 28.4) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 14.5) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.5 && $value < 16.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.0 && $value < 23.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.7 && $value <= 28.5) {
                    $data = "Gizi Lebih";
                } else if ($value > 28.5) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 14.5) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.5 && $value < 16.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.0 && $value < 23.8) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.8 && $value <= 28.5) {
                    $data = "Gizi Lebih";
                } else if ($value > 28.5) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 14.5) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.5 && $value < 16.0) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.0 && $value < 23.8) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.8 && $value <= 28.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 28.6) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 14.5) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.5 && $value < 16.1) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.1 && $value < 23.9) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.9 && $value <= 28.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 28.6) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 14.5) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.5 && $value < 16.1) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.1 && $value < 23.9) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.9 && $value <= 28.7) {
                    $data = "Gizi Lebih";
                } else if ($value > 28.7) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 14.5) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.5 && $value < 16.1) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.1 && $value < 24.0) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.0  && $value <= 28.7) {
                    $data = "Gizi Lebih";
                } else if ($value > 28.7) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 14.6) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.6  && $value < 16.1) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.1 && $value < 24.0) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.0 && $value <= 28.8) {
                    $data = "Gizi Lebih";
                } else if ($value > 28.8) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 14.6) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.6 && $value < 16.2) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.2 && $value < 24.1) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.1 && $value <= 28.8) {
                    $data = "Gizi Lebih";
                } else if ($value > 28.8) {
                    $data = "Obesitas";
                }
            }
        } else if ($tahun == 16) {
            if ($bulan == 0) {
                if ($value < 14.6) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.6 && $value < 16.2) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.2 && $value < 24.1) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.1 && $value <= 28.9) {
                    $data = "Gizi Lebih";
                } else if ($value > 28.9) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 14.6) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.6 && $value < 16.2) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.2 && $value < 24.1) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.1 && $value <= 28.9) {
                    $data = "Gizi Lebih";
                } else if ($value > 28.9) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 14.6) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.6 && $value < 16.2) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.2  && $value < 24.2) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.2 && $value <= 29.0) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.0) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 14.6) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.6 && $value < 16.2) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.2 && $value < 24.2) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.2 && $value <= 29.0) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.0) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 14.6) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.6 && $value < 16.2) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.2 && $value < 24.3) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.3 && $value <= 29.0) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.0) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 14.6) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.6 && $value < 16.3) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.3 && $value < 24.3) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.3 && $value <= 29.1) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.1) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.3) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.3 && $value < 24.3) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.3 && $value <= 29.1) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.1) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.3) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.3 && $value < 24.4) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.4 && $value <= 29.1) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.1) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.3) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.3 && $value < 24.4) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.4 && $value <= 29.2) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.2) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.3) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.3 && $value < 24.4) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.4 && $value <= 29.2) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.2) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.3) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.3 && $value < 24.4) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.4 && $value <= 29.2) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.2) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.3) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.3 && $value < 24.5) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.5 && $value <= 29.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.3) {
                    $data = "Obesitas";
                }
            }
        } else if ($tahun == 17) {
            if ($bulan == 0) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.4 && $value < 24.5) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.5 && $value <= 29.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7  && $value < 16.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.4 && $value < 24.5) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.5 && $value <= 29.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7  && $value < 16.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.4  && $value < 24.6) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.6 && $value <= 29.3) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.3) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7  && $value < 16.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.4 && $value < 24.6) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.6 && $value <= 29.4) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.4) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7  && $value < 16.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.4 && $value < 24.6) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.6 && $value <= 29.4) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.4) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7  && $value < 16.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.4 && $value < 24.6) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.6 && $value <= 29.4) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.4) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7  && $value < 16.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.4 && $value < 24.6) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.6 && $value <= 29.4) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.4) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7  && $value < 16.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.4 && $value < 24.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.7 && $value <= 29.4) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.4) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7  && $value < 16.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.4 && $value < 24.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.7 && $value <= 29.5) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.5) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7  && $value < 16.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.4 && $value < 24.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.7 && $value <= 29.5) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.5) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.4 && $value < 24.7) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.7 && $value <= 29.5) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.5) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.4 && $value < 24.8) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.8 && $value <= 29.5) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.5) {
                    $data = "Obesitas";
                }
            }
        } else if ($tahun == 18) {
            if ($bulan == 0) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.4) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.4 && $value < 24.8) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.8 && $value <= 29.5) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.5) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.5 && $value < 24.8) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.8 && $value <= 29.5) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.5) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.5  && $value < 24.8) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.8 && $value <= 29.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.6) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.5 && $value < 24.8) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.8 && $value <= 29.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.6) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.5 && $value < 24.8) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.8 && $value <= 29.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.6) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.5 && $value < 24.9) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.9 && $value <= 29.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.6) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.5 && $value < 24.9) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.9 && $value <= 29.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.6) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.5 && $value < 24.9) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.9 && $value <= 29.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.6) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.5 && $value < 24.9) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.9 && $value <= 29.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.6) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.5 && $value < 24.9) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.9 && $value <= 29.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.6) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.5 && $value < 24.9) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.9 && $value <= 29.6) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.6) {
                    $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.5 && $value < 25.0) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 25.0 && $value <= 29.7) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.7) {
                    $data = "Obesitas";
                }
            }
        } else if ($tahun == 19) {
            if ($bulan == 0) {
                if ($value < 14.7) {
                    $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.5) {
                    $data = "Gizi Kurang";
                } else if ($value >= 16.5 && $value < 25.0) {
                    $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 25.0 && $value <= 29.7) {
                    $data = "Gizi Lebih";
                } else if ($value > 29.7) {
                    $data = "Obesitas";
                }
            }
        }

        return $data;
    }

    public static function IndeksMassaTubuhMenurutUmurTahunLakiLaki($value, $bulan, $data, $tahun){
        if ($tahun == 5) {
            if ($bulan == 1) {
                if ($value < 12.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.6) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.6  && $value <= 18.3) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.3) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 12.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.6) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.6  && $value <= 18.3) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.3) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 12.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.7 && $value <= 18.3) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.3) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 12.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.7 && $value <= 18.3) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.3) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 12.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.7 && $value <= 18.3) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.3) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 12.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.7 && $value <= 18.4) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.4) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 12.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.7  && $value <= 18.4) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.4) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 12.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.7  && $value <= 18.4) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.4) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 12.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.7  && $value <= 18.4) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.4) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 12.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.7 && $value <= 18.5) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.5) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 12.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.7 && $value <= 18.5) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.5) {
                   $data = "Obesitas";
                }
            }
        } else if ($tahun == 6) {
            if ($bulan == 0) {
                if ($value < 12.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.8) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.8   && $value <= 18.5) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.5) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 12.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.1 && $value < 13.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.0 && $value < 16.8) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.8   && $value <= 18.6) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.6) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 12.2) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.2 && $value < 13.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.1 && $value < 16.8) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.8   && $value <= 18.6) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.6) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 12.2) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.2 && $value < 13.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.1 && $value < 16.8) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.8 && $value <= 18.6) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.6) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 12.2) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.2 && $value < 13.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.1  && $value < 16.8) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.8 && $value <= 18.7) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.7) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 12.2) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.2 && $value < 13.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.1  && $value < 16.9) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.9 && $value <= 18.7) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.7) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 12.2) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.2 && $value < 13.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.1  && $value < 16.9) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.9 && $value <= 18.7) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.7) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 12.2) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.2 && $value < 13.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.1  && $value < 16.9) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.9  && $value <= 18.8) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.8) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 12.2) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.2 && $value < 13.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.1  && $value < 16.9) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 16.9  && $value <= 18.8) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.8) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 12.2) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.2 && $value < 13.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.1  && $value < 17.0) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.0  && $value <= 18.9) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.9) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 12.2) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.2 && $value < 13.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.1  && $value < 17.0) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.0 && $value <= 18.9) {
                   $data = "Gizi Lebih";
                } else if ($value > 18.9) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 12.2) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.2 && $value < 13.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.1  && $value < 17.0) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.0 && $value <= 19) {
                   $data = "Gizi Lebih";
                } else if ($value > 19) {
                   $data = "Obesitas";
                }
            }
        } else if ($tahun == 7) {
            if ($bulan == 0) {
                if ($value < 12.3) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.3 && $value < 13.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.1 && $value < 17.0) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.0 && $value <= 19.0) {
                   $data = "Gizi Lebih";
                } else if ($value > 19.0) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 12.3) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.3 && $value < 13.2) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.2 && $value < 17.1) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.1 && $value <= 19.1) {
                   $data = "Gizi Lebih";
                } else if ($value > 19.1) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 12.3) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.3 && $value < 13.2) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.2 && $value < 17.1) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.1   && $value <= 19.1) {
                   $data = "Gizi Lebih";
                } else if ($value > 19.1) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 12.3) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.3 && $value < 13.2) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.2 && $value < 17.1) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.1 && $value <= 19.2) {
                   $data = "Gizi Lebih";
                } else if ($value > 19.2) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 12.3) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.3 && $value < 13.2) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.2  && $value < 17.2) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.2  && $value <= 19.2) {
                   $data = "Gizi Lebih";
                } else if ($value > 19.2) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 12.3) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.3 && $value < 13.2) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.2  && $value < 17.2) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.2  && $value <= 19.3) {
                   $data = "Gizi Lebih";
                } else if ($value > 19.3) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 12.3) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.3 && $value < 13.2) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.2  && $value < 17.2) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.2  && $value <= 19.3) {
                   $data = "Gizi Lebih";
                } else if ($value > 19.3) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 12.3) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.3 && $value < 13.2) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.2  && $value < 17.3) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.3  && $value <= 19.4) {
                   $data = "Gizi Lebih";
                } else if ($value > 19.4) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 12.3) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.3 && $value < 13.2) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.2  && $value < 17.3) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.3  && $value <= 19.4) {
                   $data = "Gizi Lebih";
                } else if ($value > 19.4) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 12.4) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.4 && $value < 13.3) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.3  && $value < 17.3) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.3  && $value <= 19.5) {
                   $data = "Gizi Lebih";
                } else if ($value > 19.5) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 12.4) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.4 && $value < 13.3) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.3  && $value < 17.4) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.4 && $value <= 19.6) {
                   $data = "Gizi Lebih";
                } else if ($value > 19.6) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 12.4) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.4 && $value < 13.3) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.3  && $value < 17.4) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.4 && $value <= 19.6) {
                   $data = "Gizi Lebih";
                } else if ($value > 19.6) {
                   $data = "Obesitas";
                }
            }
        } else if ($tahun == 8) {
            if ($bulan == 0) {
                if ($value < 12.4) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.4 && $value < 13.3) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.3 && $value < 17.4) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.4 && $value <= 19.7) {
                   $data = "Gizi Lebih";
                } else if ($value > 19.7) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 12.4) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.4 && $value < 13.3) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.3 && $value < 17.5) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.5 && $value <= 19.7) {
                   $data = "Gizi Lebih";
                } else if ($value > 19.7) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 12.4) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.4 && $value < 13.3) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.3 && $value < 17.5) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.5 && $value <= 19.8) {
                   $data = "Gizi Lebih";
                } else if ($value > 19.8) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 12.4) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.4 && $value < 13.3) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.3 && $value < 17.5) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.5 && $value <= 19.9) {
                   $data = "Gizi Lebih";
                } else if ($value > 19.9) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 12.4) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.4 && $value < 13.4) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.4 && $value < 17.6) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.6 && $value <= 19.9) {
                   $data = "Gizi Lebih";
                } else if ($value > 19.9) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 12.5) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.5 && $value < 13.4) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.4 && $value < 17.6) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.6 && $value <= 20.0) {
                   $data = "Gizi Lebih";
                } else if ($value > 20.0) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 12.5) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.5 && $value < 13.4) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.4 && $value < 17.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.7  && $value <= 20.1) {
                   $data = "Gizi Lebih";
                } else if ($value > 20.1) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 12.5) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.5 && $value < 13.4) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.4 && $value < 17.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.7  && $value <= 20.1) {
                   $data = "Gizi Lebih";
                } else if ($value > 20.1) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 12.5) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.5 && $value < 13.4) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.4 && $value < 17.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.7  && $value <= 20.2) {
                   $data = "Gizi Lebih";
                } else if ($value > 20.2) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 12.5) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.5 && $value < 13.4) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.4 && $value < 17.8) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.8  && $value <= 20.3) {
                   $data = "Gizi Lebih";
                } else if ($value > 20.3) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 12.5) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.5 && $value < 13.5) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.5 && $value < 17.8) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.8 && $value <= 20.3) {
                   $data = "Gizi Lebih";
                } else if ($value > 20.3) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 12.5) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.5 && $value < 13.5) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.5 && $value < 17.9) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.9 && $value <= 20.4) {
                   $data = "Gizi Lebih";
                } else if ($value > 20.4) {
                   $data = "Obesitas";
                }
            }
        } else if ($tahun == 9) {
            if ($bulan == 0) {
                if ($value < 12.6) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.6 && $value < 13.5) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.5 && $value < 17.9) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 17.9 && $value <= 20.5) {
                   $data = "Gizi Lebih";
                } else if ($value > 20.5) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 12.6) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.6 && $value < 13.5) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.5 && $value < 18.0) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.0 && $value <= 20.5) {
                   $data = "Gizi Lebih";
                } else if ($value > 20.5) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 12.6) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.6 && $value < 13.5) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.5 && $value < 18.0) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.0 && $value <= 20.6) {
                   $data = "Gizi Lebih";
                } else if ($value > 20.6) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 12.6) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.6 && $value < 13.5) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.5 && $value < 18.0) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.0 && $value <= 20.7) {
                   $data = "Gizi Lebih";
                } else if ($value > 20.7) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 12.6) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.6 && $value < 13.6) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.6 && $value < 18.1) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.1 && $value <= 20.8) {
                   $data = "Gizi Lebih";
                } else if ($value > 20.8) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 12.6) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.6 && $value < 13.6) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.6 && $value < 18.1) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.1 && $value <= 20.8) {
                   $data = "Gizi Lebih";
                } else if ($value > 20.8) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 12.7) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.7 && $value < 13.6) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.6 && $value < 18.2) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.2 && $value <= 20.9) {
                   $data = "Gizi Lebih";
                } else if ($value > 20.9) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 12.7) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.7 && $value < 13.6) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.6 && $value < 18.2) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.2 && $value <= 21.0) {
                   $data = "Gizi Lebih";
                } else if ($value > 21.0) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 12.7) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.7 && $value < 13.6) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.6 && $value < 18.3) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.3  && $value <= 21.1) {
                   $data = "Gizi Lebih";
                } else if ($value > 21.1) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 12.7) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.7 && $value < 13.7) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.7 && $value < 18.3) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.3  && $value <= 21.2) {
                   $data = "Gizi Lebih";
                } else if ($value > 21.2) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 12.7) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.7 && $value < 13.7) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.7 && $value < 18.4) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.4 && $value <= 21.2) {
                   $data = "Gizi Lebih";
                } else if ($value > 21.2) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 12.8) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.8 && $value < 13.7) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.7 && $value < 18.4) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.4 && $value <= 21.3) {
                   $data = "Gizi Lebih";
                } else if ($value > 21.3) {
                   $data = "Obesitas";
                }
            }
        } else if ($tahun == 10) {
            if ($bulan == 0) {
                if ($value < 12.8) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.8 && $value < 13.7) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.7 && $value < 18.5) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.5 && $value <= 21.4) {
                   $data = "Gizi Lebih";
                } else if ($value > 21.4) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 12.8) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.8 && $value < 13.8) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.8 && $value < 18.5) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.5 && $value <= 21.5) {
                   $data = "Gizi Lebih";
                } else if ($value > 21.5) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 12.8) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.8 && $value < 13.8) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.8 && $value < 18.6) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.6 && $value <= 20.6) {
                   $data = "Gizi Lebih";
                } else if ($value > 20.6) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 12.8) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.8 && $value < 13.8) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.8 && $value < 18.6) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.6 && $value <= 21.7) {
                   $data = "Gizi Lebih";
                } else if ($value > 21.7) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 12.9) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.9 && $value < 13.8) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.8 && $value < 18.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.7 && $value <= 21.7) {
                   $data = "Gizi Lebih";
                } else if ($value > 21.7) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 12.9) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.9 && $value < 13.9) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.9 && $value < 18.8) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.8 && $value <= 21.8) {
                   $data = "Gizi Lebih";
                } else if ($value > 21.8) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 12.9) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.9 && $value < 13.9) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.9 && $value < 18.8) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.8 && $value <= 21.9) {
                   $data = "Gizi Lebih";
                } else if ($value > 21.9) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 12.9) {
                   $data = "Gizi Buruk";
                } else if ($value >= 12.9 && $value < 13.9) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.9 && $value < 18.9) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.9 && $value <= 22.0) {
                   $data = "Gizi Lebih";
                } else if ($value > 22.0) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 13.0) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.0 && $value < 13.9) {
                   $data = "Gizi Kurang";
                } else if ($value >= 13.9 && $value < 18.9) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 18.9  && $value <= 22.1) {
                   $data = "Gizi Lebih";
                } else if ($value > 22.1) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 13.0) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.0 && $value < 14.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.0 && $value < 19.0) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.0  && $value <= 22.2) {
                   $data = "Gizi Lebih";
                } else if ($value > 22.2) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 13.0) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.0 && $value < 14.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.0 && $value < 19.0) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.0 && $value <= 22.3) {
                   $data = "Gizi Lebih";
                } else if ($value > 22.3) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 13.0) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.0 && $value < 14.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.0 && $value < 19.1) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.1 && $value <= 22.4) {
                   $data = "Gizi Lebih";
                } else if ($value > 22.4) {
                   $data = "Obesitas";
                }
            }
        } else if ($tahun == 11) {
            if ($bulan == 0) {
                if ($value < 13.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.1 && $value < 14.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.1 && $value < 19.2) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.2 && $value <= 22.5) {
                   $data = "Gizi Lebih";
                } else if ($value > 22.5) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 13.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.1 && $value < 14.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.1 && $value < 19.2) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.2 && $value <= 22.5) {
                   $data = "Gizi Lebih";
                } else if ($value > 22.5) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 13.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.1 && $value < 14.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.1 && $value < 19.3) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.3 && $value <= 22.6) {
                   $data = "Gizi Lebih";
                } else if ($value > 22.6) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 13.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.1 && $value < 14.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.1 && $value < 19.3) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.3 && $value <= 22.7) {
                   $data = "Gizi Lebih";
                } else if ($value > 22.7) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 13.2) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.2 && $value < 14.2) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.2 && $value < 19.4) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.4 && $value <= 22.8) {
                   $data = "Gizi Lebih";
                } else if ($value > 22.8) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 13.2) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.2 && $value < 14.2) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.2 && $value < 19.5) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.5 && $value <= 22.9) {
                   $data = "Gizi Lebih";
                } else if ($value > 22.9) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 13.2) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.2 && $value < 14.2) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.2 && $value < 19.5) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.5 && $value <= 23.0) {
                   $data = "Gizi Lebih";
                } else if ($value > 23.0) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 13.2) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.2 && $value < 14.3) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.3 && $value < 19.6) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.6 && $value <= 23.1) {
                   $data = "Gizi Lebih";
                } else if ($value > 23.1) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 13.3) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.3 && $value < 14.3) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.3 && $value < 19.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.7 && $value <= 23.2) {
                   $data = "Gizi Lebih";
                } else if ($value > 23.2) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 13.3) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.3 && $value < 14.3) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.3 && $value < 19.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.7  && $value <= 23.3) {
                   $data = "Gizi Lebih";
                } else if ($value > 23.3) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 13.3) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.3 && $value < 14.4) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.4 && $value < 19.8) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.8 && $value <= 23.4) {
                   $data = "Gizi Lebih";
                } else if ($value > 23.4) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 13.4) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.4 && $value < 14.4) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.4 && $value < 19.9) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.9 && $value <= 23.5) {
                   $data = "Gizi Lebih";
                } else if ($value > 23.5) {
                   $data = "Obesitas";
                }
            }
        } else if ($tahun == 12) {
            if ($bulan == 0) {
                if ($value < 13.4) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.4 && $value < 14.5) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.5 && $value < 19.9) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 19.9 && $value <= 23.6) {
                   $data = "Gizi Lebih";
                } else if ($value > 23.6) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 13.4) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.4 && $value < 14.5) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.5 && $value < 20.0) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.0 && $value <= 23.7) {
                   $data = "Gizi Lebih";
                } else if ($value > 23.7) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 13.5) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.5 && $value < 14.5) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.5 && $value < 20.1) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.1 && $value <= 23.8) {
                   $data = "Gizi Lebih";
                } else if ($value > 23.8) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 13.5) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.5 && $value < 14.6) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.6 && $value < 20.2) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.2  && $value <= 23.9) {
                   $data = "Gizi Lebih";
                } else if ($value > 23.9) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 13.5) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.5 && $value < 14.6) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.6 && $value < 20.2) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.2 && $value <= 24.0) {
                   $data = "Gizi Lebih";
                } else if ($value > 24.0) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 13.6) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.6 && $value < 14.6) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.6 && $value < 20.3) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.3 && $value <= 24.1) {
                   $data = "Gizi Lebih";
                } else if ($value > 24.1) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 13.6) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.6 && $value < 14.7) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.7 && $value < 20.4) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.4 && $value <= 24.2) {
                   $data = "Gizi Lebih";
                } else if ($value > 24.2) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 13.6) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.6 && $value < 14.7) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.7 && $value < 20.4) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.4 && $value <= 24.3) {
                   $data = "Gizi Lebih";
                } else if ($value > 24.3) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 13.7) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.7 && $value < 14.8) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.8 && $value < 20.5) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.5 && $value <= 24.4) {
                   $data = "Gizi Lebih";
                } else if ($value > 24.4) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 13.7) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.7 && $value < 14.8) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.8 && $value < 20.6) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.6  && $value <= 24.5) {
                   $data = "Gizi Lebih";
                } else if ($value > 24.5) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 13.7) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.7 && $value < 14.8) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.8 && $value < 20.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.7 && $value <= 24.6) {
                   $data = "Gizi Lebih";
                } else if ($value > 24.6) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 13.8) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.8 && $value < 14.9) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.9 && $value < 20.8) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.8 && $value <= 24.7) {
                   $data = "Gizi Lebih";
                } else if ($value > 24.7) {
                   $data = "Obesitas";
                }
            }
        } else if ($tahun == 13) {
            if ($bulan == 0) {
                if ($value < 13.8) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.8 && $value < 14.9) {
                   $data = "Gizi Kurang";
                } else if ($value >= 14.9 && $value < 20.8) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.8 && $value <= 24.8) {
                   $data = "Gizi Lebih";
                } else if ($value > 24.8) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 13.8) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.8 && $value < 15.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.0  && $value < 20.9) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 20.9 && $value <= 24.9) {
                   $data = "Gizi Lebih";
                } else if ($value > 24.9) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 13.9) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.9 && $value < 15.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.0  && $value < 21.0) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.0 && $value <= 25.0) {
                   $data = "Gizi Lebih";
                } else if ($value > 25.0) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 13.9) {
                   $data = "Gizi Buruk";
                } else if ($value >= 13.9 && $value < 15.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.1 && $value < 21.1) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.1  && $value <= 25.1) {
                   $data = "Gizi Lebih";
                } else if ($value > 25.1) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 14.0) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.0 && $value < 15.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.1 && $value < 21.1) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.1 && $value <= 25.2) {
                   $data = "Gizi Lebih";
                } else if ($value > 25.2) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 14.0) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.0 && $value < 15.2) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.2 && $value < 21.2) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.2 && $value <= 25.2) {
                   $data = "Gizi Lebih";
                } else if ($value > 25.2) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 14.0) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.0 && $value < 15.2) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.2 && $value < 21.3) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.3 && $value <= 25.3) {
                   $data = "Gizi Lebih";
                } else if ($value > 25.3) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 14.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.1 && $value < 15.2) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.2 && $value < 21.4) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.4 && $value <= 25.4) {
                   $data = "Gizi Lebih";
                } else if ($value > 25.4) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 14.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.1 && $value < 15.3) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.3 && $value < 21.5) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.5 && $value <= 25.5) {
                   $data = "Gizi Lebih";
                } else if ($value > 25.5) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 14.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.1 && $value < 15.3) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.3 && $value < 21.5) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.5  && $value <= 25.6) {
                   $data = "Gizi Lebih";
                } else if ($value > 25.6) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 14.2) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.2 && $value < 15.4) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.4 && $value < 21.6) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.6 && $value <= 25.7) {
                   $data = "Gizi Lebih";
                } else if ($value > 25.7) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 14.2) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.2 && $value < 15.4) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.4 && $value < 21.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.7 && $value <= 25.8) {
                   $data = "Gizi Lebih";
                } else if ($value > 25.8) {
                   $data = "Obesitas";
                }
            }
        } else if ($tahun == 14) {
            if ($bulan == 0) {
                if ($value < 14.3) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.3 && $value < 15.5) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.5 && $value < 21.8) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.8 && $value <= 25.9) {
                   $data = "Gizi Lebih";
                } else if ($value > 25.9) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 14.3) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.3 && $value < 15.5) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.5 && $value < 21.8) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.8 && $value <= 26.0) {
                   $data = "Gizi Lebih";
                } else if ($value > 26.0) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 14.3) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.3 && $value < 15.6) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.6  && $value < 21.9) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 21.9 && $value <= 26.1) {
                   $data = "Gizi Lebih";
                } else if ($value > 26.1) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 14.4) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.4 && $value < 15.6) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.6 && $value < 22.0) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.0  && $value <= 26.2) {
                   $data = "Gizi Lebih";
                } else if ($value > 26.2) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 14.4) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.4 && $value < 15.7) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.7 && $value < 22.1) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.1 && $value <= 26.3) {
                   $data = "Gizi Lebih";
                } else if ($value > 26.3) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 14.5) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.5 && $value < 15.7) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.7 && $value < 22.2) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.2 && $value <= 26.4) {
                   $data = "Gizi Lebih";
                } else if ($value > 26.4) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 14.5) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.5 && $value < 15.7) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.7 && $value < 22.2) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.2 && $value <= 26.5) {
                   $data = "Gizi Lebih";
                } else if ($value > 26.5) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 14.5) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.5 && $value < 15.8) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.8 && $value < 22.3) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.3 && $value <= 26.5) {
                   $data = "Gizi Lebih";
                } else if ($value > 26.5) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 14.6) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.6 && $value < 15.8) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.8 && $value < 22.4) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.4 && $value <= 26.6) {
                   $data = "Gizi Lebih";
                } else if ($value > 26.6) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 14.6) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.6 && $value < 15.9) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.9 && $value < 22.5) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.5  && $value <= 26.7) {
                   $data = "Gizi Lebih";
                } else if ($value > 26.7) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 14.6) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.6 && $value < 15.9) {
                   $data = "Gizi Kurang";
                } else if ($value >= 15.9 && $value < 22.5) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.5 && $value <= 26.8) {
                   $data = "Gizi Lebih";
                } else if ($value > 26.8) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 14.7) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.0 && $value < 22.6) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.6 && $value <= 26.9) {
                   $data = "Gizi Lebih";
                } else if ($value > 26.9) {
                   $data = "Obesitas";
                }
            }
        } else if ($tahun == 15) {
            if ($bulan == 0) {
                if ($value < 14.7) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.0 && $value < 22.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.7 && $value <= 27.0) {
                   $data = "Gizi Lebih";
                } else if ($value > 27.0) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 14.7) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.7 && $value < 16.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.1 && $value < 22.8) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.8 && $value <= 27.1) {
                   $data = "Gizi Lebih";
                } else if ($value > 27.1) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 14.8) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.8 && $value < 16.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.1  && $value < 22.8) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.8 && $value <= 27.1) {
                   $data = "Gizi Lebih";
                } else if ($value > 27.1) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 14.8) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.8 && $value < 16.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.1 && $value < 22.9) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 22.9  && $value <= 27.2) {
                   $data = "Gizi Lebih";
                } else if ($value > 27.2) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 14.8) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.8 && $value < 16.2) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.2 && $value < 23.0) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.0 && $value <= 27.3) {
                   $data = "Gizi Lebih";
                } else if ($value > 27.3) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 14.9) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.9 && $value < 16.2) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.2 && $value < 23.0) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.0 && $value <= 27.4) {
                   $data = "Gizi Lebih";
                } else if ($value > 27.4) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 14.9) {
                   $data = "Gizi Buruk";
                } else if ($value >= 14.9 && $value < 16.3) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.3 && $value < 23.1) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.1 && $value <= 27.4) {
                   $data = "Gizi Lebih";
                } else if ($value > 27.4) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 15.0) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.0 && $value < 16.3) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.3 && $value < 23.2) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.2 && $value <= 27.5) {
                   $data = "Gizi Lebih";
                } else if ($value > 27.5) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 15.0) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.0 && $value < 16.3) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.3 && $value < 23.3) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.3 && $value <= 27.6) {
                   $data = "Gizi Lebih";
                } else if ($value > 27.6) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 15.0) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.0 && $value < 16.4) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.4 && $value < 23.3) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.3  && $value <= 27.7) {
                   $data = "Gizi Lebih";
                } else if ($value > 27.7) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 15.0) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.0 && $value < 16.4) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.4 && $value < 23.4) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.4 && $value <= 27.7) {
                   $data = "Gizi Lebih";
                } else if ($value > 27.7) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 15.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.1 && $value < 16.5) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.5 && $value < 23.5) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.5 && $value <= 27.8) {
                   $data = "Gizi Lebih";
                } else if ($value > 27.8) {
                   $data = "Obesitas";
                }
            }
        } else if ($tahun == 16) {
            if ($bulan == 0) {
                if ($value < 15.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.1 && $value < 16.5) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.5 && $value < 23.5) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.5 && $value <= 27.9) {
                   $data = "Gizi Lebih";
                } else if ($value > 27.9) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 15.1) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.1 && $value < 16.5) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.5 && $value < 23.6) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.6 && $value <= 27.9) {
                   $data = "Gizi Lebih";
                } else if ($value > 27.9) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 15.2) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.2 && $value < 16.6) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.6  && $value < 23.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.7 && $value <= 28.0) {
                   $data = "Gizi Lebih";
                } else if ($value > 28.0) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 15.2) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.2 && $value < 16.6) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.6 && $value < 23.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.7 && $value <= 28.1) {
                   $data = "Gizi Lebih";
                } else if ($value > 28.1) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 15.2) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.2 && $value < 16.7) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.7 && $value < 23.8) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.8 && $value <= 28.1) {
                   $data = "Gizi Lebih";
                } else if ($value > 28.1) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 15.3) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.3 && $value < 16.7) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.7 && $value < 23.8) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.8 && $value <= 28.2) {
                   $data = "Gizi Lebih";
                } else if ($value > 28.2) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 15.3) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.3 && $value < 16.7) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.7 && $value < 23.9) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 23.9 && $value <= 28.3) {
                   $data = "Gizi Lebih";
                } else if ($value > 28.3) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 15.3) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.3 && $value < 16.8) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.8 && $value < 24.0) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.0 && $value <= 28.3) {
                   $data = "Gizi Lebih";
                } else if ($value > 28.3) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 15.3) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.3 && $value < 16.8) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.8 && $value < 24.0) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.0 && $value <= 28.4) {
                   $data = "Gizi Lebih";
                } else if ($value > 28.4) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 15.4) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.4 && $value < 16.8) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.8 && $value < 24.1) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.1 && $value <= 28.5) {
                   $data = "Gizi Lebih";
                } else if ($value > 28.5) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 15.4) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.4 && $value < 16.9) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.9 && $value < 24.2) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.2 && $value <= 28.5) {
                   $data = "Gizi Lebih";
                } else if ($value > 28.5) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 15.4) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.4 && $value < 16.9) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.9 && $value < 24.2) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.2 && $value <= 28.6) {
                   $data = "Gizi Lebih";
                } else if ($value > 28.6) {
                   $data = "Obesitas";
                }
            }
        } else if ($tahun == 17) {
            if ($bulan == 0) {
                if ($value < 15.4) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.4 && $value < 16.9) {
                   $data = "Gizi Kurang";
                } else if ($value >= 16.9 && $value < 24.3) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.3 && $value <= 28.6) {
                   $data = "Gizi Lebih";
                } else if ($value > 28.6) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 15.5) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.5 && $value < 17.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.0 && $value < 24.3) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.3 && $value <= 28.7) {
                   $data = "Gizi Lebih";
                } else if ($value > 28.7) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 15.5) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.5 && $value < 17.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.0  && $value < 24.4) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.4 && $value <= 28.7) {
                   $data = "Gizi Lebih";
                } else if ($value > 28.7) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 15.5) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.5 && $value < 17.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.0 && $value < 24.4) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.4 && $value <= 28.8) {
                   $data = "Gizi Lebih";
                } else if ($value > 28.8) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 15.5) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.5 && $value < 17.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.1 && $value < 24.5) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.5 && $value <= 28.9) {
                   $data = "Gizi Lebih";
                } else if ($value > 28.9) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 15.6) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.6 && $value < 17.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.1 && $value < 24.5) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.5 && $value <= 28.9) {
                   $data = "Gizi Lebih";
                } else if ($value > 28.9) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 15.6) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.6 && $value < 17.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.1 && $value < 24.6) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.6 && $value <= 29.0) {
                   $data = "Gizi Lebih";
                } else if ($value > 29.0) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 15.6) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.6 && $value < 17.1) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.1 && $value < 24.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.7 && $value <= 29.0) {
                   $data = "Gizi Lebih";
                } else if ($value > 29.0) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 15.6) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.6 && $value < 17.2) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.2 && $value < 24.7) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.7 && $value <= 29.1) {
                   $data = "Gizi Lebih";
                } else if ($value > 29.1) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 15.6) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.6 && $value < 17.2) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.2 && $value < 24.8) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.8 && $value <= 29.1) {
                   $data = "Gizi Lebih";
                } else if ($value > 29.1) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 15.7) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.7 && $value < 17.2) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.2 && $value < 24.8) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.8 && $value <= 29.2) {
                   $data = "Gizi Lebih";
                } else if ($value > 29.2) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 15.7) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.7 && $value < 17.3) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.3 && $value < 24.9) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.9 && $value <= 29.2) {
                   $data = "Gizi Lebih";
                } else if ($value > 29.2) {
                   $data = "Obesitas";
                }
            }
        } else if ($tahun == 18) {
            if ($bulan == 0) {
                if ($value < 15.7) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.7 && $value < 17.3) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.3 && $value < 24.9) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 24.9 && $value <= 29.2) {
                   $data = "Gizi Lebih";
                } else if ($value > 29.2) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 1) {
                if ($value < 15.7) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.7 && $value < 17.3) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.3 && $value < 25.0) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 25.0 && $value <=29.3) {
                   $data = "Gizi Lebih";
                } else if ($value >29.3) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 2) {
                if ($value < 15.7) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.7 && $value < 17.3) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.3  && $value < 25.0) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 25.0 && $value <= 29.3) {
                   $data = "Gizi Lebih";
                } else if ($value > 29.3) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 3) {
                if ($value < 15.7) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.7 && $value < 17.0) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.0 && $value < 25.1) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 25.1 && $value <= 29.4) {
                   $data = "Gizi Lebih";
                } else if ($value > 29.4) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 4) {
                if ($value < 15.5) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.5 && $value < 17.4) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.4 && $value < 25.1) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 25.1 && $value <= 29.4) {
                   $data = "Gizi Lebih";
                } else if ($value > 29.4) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 5) {
                if ($value < 15.8) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.8 && $value < 17.4) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.4 && $value < 25.1) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 25.1 && $value <= 29.5) {
                   $data = "Gizi Lebih";
                } else if ($value > 29.5) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 6) {
                if ($value < 15.8) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.8 && $value < 17.4) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.4 && $value < 25.2) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 25.2 && $value <= 29.5) {
                   $data = "Gizi Lebih";
                } else if ($value > 29.5) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 7) {
                if ($value < 15.8) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.8 && $value < 17.5) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.5 && $value < 25.2) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 25.2 && $value <= 29.5) {
                   $data = "Gizi Lebih";
                } else if ($value > 29.5) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 8) {
                if ($value < 15.8) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.8 && $value < 17.5) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.5 && $value < 25.3) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 25.3 && $value <= 29.6) {
                   $data = "Gizi Lebih";
                } else if ($value > 29.6) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 9) {
                if ($value < 15.8) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.8 && $value < 17.5) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.5 && $value < 25.3) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 25.3 && $value <= 29.6) {
                   $data = "Gizi Lebih";
                } else if ($value > 29.6) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 10) {
                if ($value < 15.8) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.8 && $value < 17.5) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.5 && $value < 25.4) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 25.4 && $value <= 29.6) {
                   $data = "Gizi Lebih";
                } else if ($value > 29.6) {
                   $data = "Obesitas";
                }
            } else if ($bulan == 11) {
                if ($value < 15.8) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.8 && $value < 17.5) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.5 && $value < 25.4) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 25.4 && $value <= 29.7) {
                   $data = "Gizi Lebih";
                } else if ($value > 29.7) {
                   $data = "Obesitas";
                }
            }
        } else if ($tahun == 19) {
            if ($bulan == 0) {
                if ($value < 15.9) {
                   $data = "Gizi Buruk";
                } else if ($value >= 15.9 && $value < 17.6) {
                   $data = "Gizi Kurang";
                } else if ($value >= 17.6 && $value < 25.4) {
                   $data = "Gizi Baik";
                } else if ($value >= /*tanda*/ 25.4 && $value <= 29.7) {
                   $data = "Gizi Lebih";
                } else if ($value > 29.7) {
                   $data = "Obesitas";
                }
            }
        }

        return $data;
    }
}