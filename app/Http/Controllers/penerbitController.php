<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class penerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $data = Penerbit::where('nama_penerbit', 'LIKE', '%' . $keyword . '%')
            ->orWhere('kota', 'LIKE', '%' . $keyword . '%')
            ->paginate(5);
        $data->withPath('penerbit');
        $data->appends($request->all());
        return view('beranda.penerbit.index', compact(
            'data',
            'keyword'
        ));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Penerbit;
        return view('beranda.penerbit.create', compact(
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
        $model = new penerbit;
        $model->nama_penerbit = $request->nama_penerbit;
        $model->kota = $request->kota;
        $model->save();

        return redirect('penerbit');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function show(Penerbit $penerbit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Penerbit::find($id);
        return view('beranda.penerbit.edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Penerbit::find($id);
        $model->nama_penerbit = $request->nama_penerbit;
        $model->kota = $request->kota;
        $model->save();

        return redirect('penerbit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Penerbit::find($id);
        $model->delete($id);
        return redirect('penerbit');
    }
}
