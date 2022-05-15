@extends('beranda.layouts.main')
@section('container')

<form action="{{ url('satuankerja') }}" method="post">
    @csrf
    <h1>Tambahkan Data</h1>

    <div class="mb-3">
      <label for="id_satker" class="form-label">ID satker </label>
      <input type="text" name="id_satker" class="form-control" id="id_satker" aria-describedby="id_satker">
    </div>

    <div class="mb-3">
        <label for="nama_satker" class="form-label">Nama Satker </label>
        <input type="text" name="nama_satker" class="form-control" id="nama_satker" aria-describedby="nama_satker">
      </div>

      <div class="mb-3">
        <label for="alamat_satker" class="form-label">Alamat Satker </label>
        <input type="text" name="alamat_satker" class="form-control" id="alamat_satker" aria-describedby="alamat_satker">
      </div>


      <div class="mb-3">
        <label for="telepon_satker" class="form-label">Telepon Satker </label>
        <input type="text" name="telepon_satker" class="form-control" id="telepon_satker" aria-describedby="telepon_satker">
      </div>


    <button type="submit" class="btn btn-info">Simpan</button>
  </form>



    
@endsection



