<?php

namespace App\Http\Controllers;

use App\Models\Bulanlaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BulanLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $datas = Tambahlaporan::all();


        $bulanlaporan = new Bulanlaporan();
        $datas = $bulanlaporan->getBulanlaporan(Auth::user()->id_satker)->get();

        // dd($datas);
        return view('beranda.bulanlaporan.index', compact(
            'datas'
        ));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Bulanlaporan;
        return view('beranda.bulanlaporan.create', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Bulanlaporan;
        $model->nama_bulan = $request->nama_bulan;
        $model->bulan_angka = $request->bulan_angka;
        $model->tahun = $request->tahun;
        $id_satker = Auth::user()->id_satker;
        $model->id_satker = $id_satker;
        $model->save();


        return redirect('bulanlaporan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bulanlaporan  $bulanlaporan
     * @return \Illuminate\Http\Response
     */
    public function show(Bulanlaporan $bulanlaporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bulanlaporan  $bulanlaporan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Bulanlaporan::find($id);
        return view('beranda.tambahlaporan.edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bulanlaporan  $bulanlaporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Bulanlaporan::find($id);
        $model->bulan = $request->bulan;
        $model->tahun = $request->tahun;
        $model->save();

        return redirect('bulanlaporan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bulanlaporan  $bulanlaporan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        if (Bulanlaporan::destroy($id)) {
            session()->flash('success', 'Data berhasil dihapus');
        } else {
            session()->flash('failed', 'data gagal dihapus');
        }
        return redirect('bulanlaporan');
    }
}
