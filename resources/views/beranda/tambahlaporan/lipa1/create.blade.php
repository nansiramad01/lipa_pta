@extends('beranda.layouts.main')
@section('container')

<form action="{{ url('Lipa1') }}" method="post" enctype="multipart/form-data">
    @csrf
    <h1>Tambahkan Data</h1>


    <div class="card card-denger">
        <div class="card-header">
            <div class="card-title">
                Upload dokumen
            </div>
        </div>

        <label for="no_ktp" class="from-table">no ktp</label>
        <div class="input-group mb-3">
            <input type="file" name="no_ktp" class="from-control" id="inputGropFile">

            <label for="inputGropFile" class="input-group-text">upload</label>
        </div>

    </div>



    <button type="submit" class="btn btn-info">Simpan</button>
</form>




@endsection