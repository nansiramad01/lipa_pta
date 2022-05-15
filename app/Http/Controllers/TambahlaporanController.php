<?php

namespace App\Http\Controllers;

use App\Models\Tambahlaporan;
use Illuminate\Http\Request;
use View;

class TambahlaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // // $keyword = $request->keyword;
        // $data = Penerbit::where('nama_penerbit', 'LIKE', '%' . $keyword . '%')
        //     ->orWhere('kota', 'LIKE', '%' . $keyword . '%')
        //     ->paginate(5);
        // $data->withPath('penerbit');
        $datas = Tambahlaporan::all();

        return view('beranda.tambahlaporan.index', compact(
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
        $model = new Tambahlaporan;
        return view('beranda.tambahlaporan.create', compact(
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
        $model = new Tambahlaporan;
        $model->bulan = $request->bulan;
        $model->tahun = $request->tahun;
        $model->save();

        return redirect('bulanlaporan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tambahlaporan  $tambahlaporan
     * @return \Illuminate\Http\Response
     */
    public function show(tambahlaporan $tambahlaporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tambahlaporan  $tambahlaporan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $model = Tambahlaporan::find($id);
        return view('beranda.tambahlaporan.edit', compact(
            'model'
        ));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tambahlaporan  $tambahlaporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $model = Tambahlaporan::find($id);
        $model->bulan = $request->bulan;
        $model->tahun = $request->tahun;
        $model->save();

        return redirect('bulanlaporan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tambahlaporan  $tambahlaporan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Tambahlaporan::find($id);
        $model->delete($id);
        return redirect('bulanlaporan');
    }

    public function getForm($id)
    {
        return view('form.lipa' . $id)->render();
    }
}
