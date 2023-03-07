<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use App\Models\HistoryLelang;
use App\Models\Lelang;
use App\Models\Barang;
use App\Models\User;
use PDF;


class ReportController extends Controller
{
    //
    public function generatePdf()
    {
        $historylelangs = HistoryLelang::orderBy('harga', 'desc')->get();
        $pdf = PDF::loadview('masyarakat.penawaran',['penawaran' => $historylelangs]);

        //mengatur opsi pdf
        $pdf->serPaper('A4', 'potrait');

        //Mengirimkan file ke browser
        return $pdf->stream('Laporan-lelang.pdf');
    }
   
}
