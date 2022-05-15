@extends('beranda.layouts.main')
@section('container')

<form action="{{ url('penerbit') }}" method="post">
    @csrf
    <h1>Tambahkan Data</h1>

    <div class="mb-3">
      <label for="nama_penerbit" class="form-label">nama penerbit </label>
      <input type="text" name="nama_penerbit" class="form-control" id="nama_penerbit" aria-describedby="nama_penerbit">
    </div>

    {{-- <div class="mb-3">
        <label for="kota" class="form-label">kota </label>
        <input type="text" name="kota" class="form-control" id="kota" aria-describedby="kota">
      </div> --}}



    <div class="form-group">
      <label for="kota"> Kota</label>
      <select name="kota" class="form-control" id="kota" class="form-select">
        <option selected>--pilih---</option>
        <option value="bandar aceh">Bandar Aceh</option>
        <option value="langsa"> Langsa</option>
        <option value="Lhokseumawe"> Lhokseumawe</option>
        <option value="Sabang">Sabang</option>
        <option value="Subulussalam"> Subulussalam</option>
        <option value="Denpasar"> Denpasar</option>
        <option value="Pangkalpinang">Pangkalpinang</option>
        <option value="Cilegon"> Cilegon</option>
        <option value="Serang"> Serang</option>
        <option value="Tangerang Selatan">	Tangerang Selatan</option>
        <option value="Tangerang"> Tangerang</option>
        <option value="Bengkulue"> Bengkulue</option>
        <option value="Yogyakarta">Yogyakarta</option>
        <option value="Gorontalo"> Gorontalo</option>
        <option value="jakarta">Jakarta</option>
        <option value="Jakarta Barat"> Jakarta Barat</option>
        <option value="Jakarta pusat">Jakarta pusat</option>
        <option value="Jakarta selatan"> Jakarta selatan</option>
        <option value="Jakarta Timur"> Jakarta Timur</option>
        <option value="Dumai"> Dumai</option>
        <option value="Pekanbaru"> Pekanbaru</option>
      </select>
    </div>

    <button type="submit" class="btn btn-info">Simpan</button>
  </form>



    
@endsection



