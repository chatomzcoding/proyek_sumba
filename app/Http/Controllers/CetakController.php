<?php

namespace App\Http\Controllers;

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
                $data = Rekening::all();
                $pdf = PDF::loadView('cetak.rekening', compact('data'));
                break;
            
            default:
                # code...
                break;
        }
           
     
        return $pdf->download($namafile.'.pdf');
    }
}
