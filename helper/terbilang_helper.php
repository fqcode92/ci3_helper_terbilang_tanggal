<?php

defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('terbilang')) {
    function terbilang($x)
    {
        $angka = ['', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas'];

        if ($x < 12)
            return ' ' . $angka[$x];
        elseif ($x < 20)
            return terbilang($x - 10) . ' belas';
        elseif ($x < 100)
            return terbilang($x / 10) . ' puluh' . terbilang($x % 10);
        elseif ($x < 200)
            return ' seratus' . terbilang($x - 100);
        elseif ($x < 1000)
            return terbilang($x / 100) . ' ratus' . terbilang($x % 100);
        elseif ($x < 2000)
            return ' seribu' . terbilang($x - 1000);
        elseif ($x < 1000000)
            return terbilang($x / 1000) . ' ribu' . terbilang($x % 1000);
        elseif ($x < 1000000000)
            return terbilang($x / 1000000) . ' juta' . terbilang($x % 1000000);
        elseif ($x < 1000000000000)
            return terbilang($x / 1000000000) . ' milyar' . terbilang(fmod($x, 1000000000));
        elseif ($x < 1000000000000000)
            return terbilang($x / 1000000000000) . ' trilyun' . terbilang(fmod($x, 1000000000000));
        elseif ($x < 1000000000000000000)
            return terbilang($x / 1000000000000000) . ' kuadriliun' . terbilang(fmod($x, 1000000000000000));
        elseif ($x < 1000000000000000000000)
            return terbilang($x / 1000000000000000000) . ' kuintiliun' . terbilang(fmod($x, 1000000000000000000));
        elseif ($x < 1000000000000000000000000)
            return terbilang($x / 1000000000000000000000) . ' sekstiliun' . terbilang(fmod($x, 1000000000000000000000));
        elseif ($x < 1000000000000000000000000000)
            return terbilang($x / 1000000000000000000000000) . ' septiliun' . terbilang(fmod($x, 1000000000000000000000000));
        elseif ($x < 1000000000000000000000000000000)
            return terbilang($x / 1000000000000000000000000000) . ' oktiliun' . terbilang(fmod($x, 1000000000000000000000000000));
        elseif ($x < 1000000000000000000000000000000000)
            return terbilang($x / 1000000000000000000000000000000) . ' noniliun' . terbilang(fmod($x, 1000000000000000000000000000000));
        elseif ($x < 1000000000000000000000000000000000000)
            return terbilang($x / 1000000000000000000000000000000000) . ' desiliun' . terbilang(fmod($x, 1000000000000000000000000000000000));
        else
            return 'Melebihi batas';
    }
}
