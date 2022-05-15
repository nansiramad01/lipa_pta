@extends('beranda.layouts.main')
@section('container')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h4>Welcome Back, {{ auth()->user()->name }} </h4>
    
  </div>

  <h4 >Daftar Penerbit</h4>

  <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead class="table-info">
        {{-- <th>No</th>
        <th>Nama Penerbit</th>
        <th>Kota</th>
      </thead> --}}
      <tbody>

        <tr>
          <td>Nama</td>
          <td> {{ auth()->user()->name }}  </td> 
        </tr>

        <tr>
          <td>Username</td>
          <td> {{ auth()->user()->username }}  </td> 
        </tr>

        <tr>
          <td>Email</td>
          <td> {{ auth()->user()->email }}  </td>
          {{-- <td class="text-center" > <a class="btn btn-success" href=" {{ url('penerbit/'.$value->id.'/edit') }} ">Edit</a> </td> --}}
        </tr>

        <tr>
          <td>No Telepon</td>
          <td> {{ auth()->user()->no_hp }}  </td> 
        </tr>

        {{-- <tr>
          <td>Password</td>
          <td> {{ auth()->user()->password }}  </td> 
        </tr> --}}

               
      </tbody>
    </table>

    
@endsection

