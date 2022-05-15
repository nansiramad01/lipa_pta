@extends('beranda.layouts.main')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h4>Welcome Back, {{ auth()->user()->name }} </h4>
    
  </div>

  <h4 >Daftar Penerbit</h4>


  <form class="d-flex mt-3 mb-4" method="GET" action="{{ url('penerbit') }}">
    <div class="col-md-3">
    <input class="form-control" type="text"  name="keyword" value="{{ $keyword }}"/></div>
    <button class="btn btn-info" type="submit">Search</button>
  </form> 

  <div>
    <a class="btn btn-info" href=" {{ url('penerbit/create') }} ">Tambah</a>
  </div>
  


  <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead class="table-info">
        <th>No</th>
        <th>Nama Penerbit</th>
        <th>Kota</th>
        <th class="text-center" colspan="2" >Aksi</th>
      </thead>
      <tbody>

        @foreach ($data as $key=>$value)
        <tr>
          <td> {{ $loop->iteration }} </td>
          <td> {{ $value->nama_penerbit }} </td>
          <td> {{ $value->kota }} </td>
          <td class="text-center" > <a class="btn btn-success" href=" {{ url('penerbit/'.$value->id.'/edit') }} ">Edit</a> </td>
          <td class="text-center" >  
            <form action=" {{ url('penerbit/'.$value->id) }} " method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE" >
            <button class="btn btn-danger" type="submit">Hapus</button>
            </form>
          </td>
        </tr>
       
      @endforeach
      </tbody>
    </table>

    {{ $data->links() }}

    
@endsection