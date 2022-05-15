@extends('beranda.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h2 class="h3">Selamat Datang di Portal LIPA PTA | <b> {{ auth()->user()->name }} </b> </h2>
</div>

<br>
<h1 style="font-family: Arial, Helvetica, sans-serif" ><b>PENGADILAN TINGGI AGAMA PEKANBARU</b></h1>

<img class="img-center" src="/img/kantor_PTA.jpg" style="object-fit: cover; width: 50%;" alt="buku" ">


@endsection