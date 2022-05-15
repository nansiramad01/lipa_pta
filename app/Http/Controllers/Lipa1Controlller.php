<?php

namespace App\Http\Controllers;

use App\Models\lipa1;
use Illuminate\Http\Request;

class Lipa1Controlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('beranda.tambahlaporan.lipa1.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Lipa1;
        return view('beranda.tambahlaporan.lipa1.create', compact(
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
        // $model = lipa1::create($request . all());
        // if ($request->hasFile(''));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lipa1  $lipa1
     * @return \Illuminate\Http\Response
     */
    public function show(lipa1 $lipa1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lipa1  $lipa1
     * @return \Illuminate\Http\Response
     */
    public function edit(lipa1 $lipa1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lipa1  $lipa1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lipa1 $lipa1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lipa1  $lipa1
     * @return \Illuminate\Http\Response
     */
    public function destroy(lipa1 $lipa1)
    {
        //
    }
}
