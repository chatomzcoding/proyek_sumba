<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use App\Models\Rekening;
use Illuminate\Http\Request;
use PDF;

class CetakController extends Controller
{
    public function index($sesi)
    {
        switch ($sesi) {
            case 'rekening':
                $namafile = 'Rekening';
                $data = Rekening::latest()->get();
                $pdf = PDF::loadView('cetak.rekening', compact('data'));
                break;
            case 'jurnal':
                $namafile = 'Jurnal';
                $data = Jurnal::orderBy('tanggal','DESC')->get();
                $pdf = PDF::loadView('cetak.jurnal', compact('data'));
                break;
            case 'laporan':
                $namafile = 'Laporan';
                $data = Jurnal::latest()->get();
                $pdf = PDF::loadView('cetak.laporan', compact('data'));
                break;
            
            default:
                # code...
                break;
        }
           
     
        return $pdf->stream($namafile.'.pdf');
    }
}
