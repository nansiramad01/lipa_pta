@extends('beranda.layouts.main')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h4>Welcome Back, {{ auth()->user()->name }} </h4>

</div>

<h4>Rekapitulasi</h4>


{{-- <form class="d-flex mt-3 mb-4" method="GET" action="{{ url('satuankerja') }}">
    <div class="col-md-3">
        <input class="form-control" type="text" name="keyword" value="{{ $keyword }}" />
    </div>
    <button class="btn btn-info" type="submit">Search</button>
</form> --}}

<div>
    <a class="btn btn-info" href=" {{ url('rk1/create') }} ">Tambah</a>
</div>



@endsection