<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use App\Models\Rekening;
use Illuminate\Http\Request;

class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekening = Rekening::all();
        $awal = NULL;
        $akhir = NULL;
        if (isset($_GET['awal'])) {
            $awal = $_GET['awal'];
            $akhir = $_GET['akhir'];
            $jurnal = Jurnal::where('tanggal','>=',$_GET['awal'])->where('tanggal','<=',$_GET['akhir'])->latest()->get();
        } else {
            $jurnal = Jurnal::orderBy('tanggal','DESC')->get();
        }
        
        return view('jurnal.index', compact('jurnal','rekening','awal','akhir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Jurnal::create($request->all());

        return back()->with('ds','Jurnal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function show(Jurnal $jurnal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jurnal $jurnal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jurnal $jurnal)
    {
        $jurnal = Jurnal::find($request->id);
        $jurnal->no_transaksi = $request->no_transaksi;
        $jurnal->tanggal = $request->tanggal;
        $jurnal->rekening_id = $request->rekening_id;
        $jurnal->nominal = $request->nominal;
        $jurnal->deskripsi = $request->deskripsi;
        $jurnal->save();

        return back()->with('ds','Jurnal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurnal $jurnal)
    {
        dd($jurnal);
        return back()->with('ds','Jurnal');
    }
}
