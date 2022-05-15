@extends('beranda.layouts.main')

@section('container')

<form action="{{ url('bulanlaporan/'.$model->id) }}" method="post">
  @csrf
  <input type="hidden" name="_method" value="PATCH">

  <h1>Tambahkan Data</h1>


  <div class="form-group">
    <label for="bulan"> Bulan</label>
    <select name="bulan" class="form-control" id="bulan" class="form-select">
      <option value="{{ $model->bulan }}">--pilih---</option>
      <option value="januari">januari</option>
      <option value="februari">februari</option>
      <option value="maret">maret</option>
      <option value="april">april</option>
      <option value="mei">mei</option>
      <option value="juni">juni</option>
      <option value="juli">juli</option>
      <option value="agustus">agustus</option>
      <option value="september">september</option>
      <option value="oktober">oktober</option>
      <option value="november">november</option>
      <option value="desember">desember</option>
    </select>
  </div>

  {{-- <div class="mb-3">
    <label for="tahun" class="form-label">Tahun</label>
    <input type="text" name="tahun" class="form-control" id="tahun" aria-describedby="tahun"
      value=" {{ $model->tahun }} ">
  </div> --}}

  <div class="form-group">
    <label for="tahun"> Tahun</label>
    <select name="tahun" class="form-control" id="tahun" class="form-select">
      <option value="{{ $model->tahun }}">--pilih---</option>
      <option value="2017">2017</option>
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
      {{-- <option value="2023">2023</option>
      <option value="2024">2024</option>
      <option value="2025">2025</option> --}}
    </select>
  </div>


  <button type="submit" class="btn btn-info">Simpan</button>
</form>



@endsection