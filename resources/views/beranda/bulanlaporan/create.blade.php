@extends('beranda.layouts.main')

@section('container')


{{-- <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Dropdown button
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
    </div>
</div> --}}


<form action="{{ url('bulanlaporan') }}" method="post">
    @csrf
    <h1>Tambahkan Data</h1>

    <div class="form-group">
        <label for="nama_bulan"> Bulan</label>
        <select name="nama_bulan" class="form-control" id="nama_bulan" class="form-select">
            <option selected>--pilih---</option>
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

    <div class="form-group">
        <label for="bulan_angka"> Nama Bulan Dalam Angka</label>
        <select name="bulan_angka" class="form-control" id="bulan_angka" class="form-select">
            <option selected>--pilih---</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
    </div>

    {{-- <div class="mb-3">
        <label for="tahun" class="form-label">Tahun</label>
        <input type="text" name="tahun" class="form-control" id="tahun" aria-describedby="tahun">
    </div> --}}

    <div class="form-group">
        <label for="tahun"> Tahun</label>
        <select name="tahun" class="form-control" id="tahun" class="form-select">
            <option selected>--pilih---</option>
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