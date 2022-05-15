@extends('beranda.layouts.main')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h4>Welcome Back, {{ auth()->user()->name }} </h4>
    
  </div>

  <h4 >Daftar Satuan Kerja</h4>


  {{-- <form class="d-flex mt-3 mb-4" method="GET" action="{{ url('satuankerja') }}">
    <div class="col-md-3">
    <input class="form-control" type="text"  name="keyword" value="{{ $keyword }}"/></div>
    <button class="btn btn-info" type="submit">Search</button>
  </form>  --}}

  <div>
    <a class="btn btn-info" href=" {{ url('satuankerja/create') }} ">Tambah</a>
  </div>
  


  <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead class="table-info">
        <th>NO</th>
        <th>ID satker</th>
        <th>Nama Satker</th>
        <th>Alamat Satker</th>
        <th>Telepon Satker</th>
        <th class="text-center" colspan="2" >Aksi</th>
      </thead>
      <tbody>

        @foreach ($data as $key=>$value)
        <tr>
          <td> {{ $loop->iteration }} </td>
          <td> {{ $value->id_satker }} </td>
          <td> {{ $value->nama_satker }} </td>
          <td> {{ $value->alamat_satker }} </td>
          <td> {{ $value->telepon_satker }} </td>
          <td class="text-center" > <a class="btn btn-success" href=" {{ url('satuankerja/'.$value->id.'/edit') }} ">Edit</a> </td>
          <td class="text-center" >  
            <form action=" {{ url('satuankerja/'.$value->id) }} " method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE" >
            <button class="btn btn-danger" type="submit">Hapus</button>
            </form>
          </td>
        </tr>
       
      @endforeach
      </tbody>
    </table>

    {{-- {{ $data->links() }} --}}

    
@endsection