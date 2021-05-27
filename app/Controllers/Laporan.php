<?php

namespace App\Controllers;

use \Mpdf\Mpdf;

class Laporan extends BaseController
{
    public function index()
    {
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<h1>Hello world!</h1>');
        $mpdf->Output();
        return redirect()->to($mpdf->Output('file.pdf', '1'));
    }
}
