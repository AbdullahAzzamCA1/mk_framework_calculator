<?php

namespace App\Controllers;

class Calculator extends BaseController
{
    public function index()
    {
        return view('View_Calculator');
    }

    public function hitung()
    {
        if (isset($_POST['hitung'])) {
            $bil1 = $_POST['bil1'];
            $bil2 = $_POST['bil2'];
            $operasi = $_POST['operasi'];
            switch ($operasi) {
                case '+':
                    $hasil = $bil1 + $bil2;
                    break;
                case '-':
                    $hasil = $bil1 - $bil2;
                    break;
                case '*':
                    $hasil = $bil1 * $bil2;
                    break;
                case '/':
                    $hasil = $bil1 / $bil2;
                    break;
                }
                $data['bil1'] = $bil1;
                $data['bil2'] = $bil2;
                $data['operasi'] = $operasi;
                $data['hasil'] = $hasil;

                return view('View_Calculator', $data);
            }
    }
}