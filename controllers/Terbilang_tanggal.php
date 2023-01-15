<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Terbilang_tanggal extends CI_Controller

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('terbilang_tanggal');
    }

    public function index()
    {
        $tanggal = '2022-12-01';

        // menampilkan tanggal dalam format versi panjang dengan hari
        $tanggal_lengkap = terbilang_tanggal($tanggal);
        echo $tanggal_lengkap . '<br/>'; // output: "Senin, 01 Desember 2022"

        // menampilkan tanggal dalam format versi panjang tanpa hari
        $tanggal_lengkap = terbilang_tanggal($tanggal, false, false);
        echo $tanggal_lengkap . '<br/>'; // output: "01 Desember 2022"

        // menampilkan tanggal dalam format versi pendek dengan hari
        $tanggal_pendek = terbilang_tanggal($tanggal, true);
        echo $tanggal_pendek . '<br/>'; // output: "Senin, 01 Des 2022"

        // menampilkan tanggal dalam format versi pendek tanpa hari
        $tanggal_pendek = terbilang_tanggal($tanggal, true, false);
        echo $tanggal_pendek; // output: "01 Des 2022"

    }
}

/* End of file Terbilang_tanggal.php */
