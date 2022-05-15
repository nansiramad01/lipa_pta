<?php

namespace App\Http\Controllers;

use App\Models\Satuankerja;
use Illuminate\Http\Request;

class SatuankerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Satuankerja::all();
        return view('beranda.satuankerja.index', compact(
            'data'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Satuankerja();
        return view('beranda.satuankerja.create', compact(
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
        $model = new Satuankerja();
        $model->id_satker = $request->id_satker;
        $model->nama_satker = $request->nama_satker;
        $model->alamat_satker = $request->alamat_satker;
        $model->telepon_satker = $request->telepon_satker;
        $model->save();

        return redirect('satuankerja');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Satuankerja  $satuankerja
     * @return \Illuminate\Http\Response
     */
    public function show($id_satker)
    {
        $model = Satuankerja::find($id_satker);
        return view('beranda.satuankerja.edit', compact(
            'model'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Satuankerja  $satuankerja
     * @return \Illuminate\Http\Response
     */
    public function edit($id_satker)
    {

        $model = Satuankerja::find($id_satker);
        return view('beranda.satuankerja.edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Satuankerja  $satuankerja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Satuankerja::find($id);
        $model->id_satker = $request->id_satker;
        $model->nama_satker = $request->nama_satker;
        $model->alamat_satker = $request->alamat_satker;
        $model->telepon_satker = $request->telepon_satker;
        $model->save();

        return redirect('satuankerja');
    }

    /**
     * Remove the specified resource from storage.  
     *
     * @param  \App\Models\Satuankerja  $satuankerja
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Satuankerja::find($id);
        $model->delete($id);
        return redirect('satuankerja');
    }
}
