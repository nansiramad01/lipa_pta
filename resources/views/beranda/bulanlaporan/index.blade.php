@extends('beranda.layouts.main')

@section('container')

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session()->get('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if (session()->has('failed'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  {{ session()->get('failed') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

{{--

<h4>Kirim Laporan</h4>
<br>

{{-- <form class="d-flex mt-3 mb-4" method="GET" action="{{ url('penerbit') }}">
  <div class="col-md-3">
    <input class="form-control" type="text" name="keyword" value="{{ $keyword }}" />
  </div>
  <button class="btn btn-info" type="submit">Search</button>
</form> --}}

<div>
  <a class="btn btn-info" href=" {{ url('bulanlaporan/create') }} ">Tambah Bulan Laporan</a>
</div>

<br>


<table id="example" class="table table-striped table-bordered" style="width:100%">
  <thead class="table-info">
    <th>No</th>
    <th>Nama Bulan</th>
    <th>Tahun</th>
    <th>Kirim Laporan</th>
    <th class="text-center" colspan="2">Aksi</th>
  </thead>
  <tbody>

    @foreach ($datas as $key=>$value)
    <tr>
      <td> {{ $loop->iteration }} </td>
      <td> {{ $value->nama_bulan }} </td>
      <td> {{ $value->tahun }} </td>
      <td> <a class="btn btn-success" href="{{ route('laporan.create', ['id'=>1]) }}">Kirim Laporan Bulan Ini</a> </td>
      <td class="text-center"> <a class="btn btn-success"
          href=" {{ url('bulanlaporan/'.$value->id.'/edit') }} ">Edit</a>
      </td>
      <td>
        <button onclick="handleDelete({{ $value->id }})" class="btn btn-danger" type="submit">Hapus</button>
      </td>
      {{-- <td class="text-center">

        <form action=" {{ url('bulanlaporan/'.$value->id) }} " method="post">
          @csrf
          <input type="hidden" name="_method" value="DELETE">
          <button onclick="handleDelete()" class="btn btn-danger" type="submit">Hapus</button>
        </form>
      </td> --}}
    </tr>

    @endforeach
  </tbody>
</table>


<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> --}}


<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin data ini akan dihapus
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak, tutup</button>
        <a id="deleteLink" onclick="handleDestroy()" class="btn btn-danger">iyah hapus</a>
      </div>
    </div>
  </div>
</div>


@endsection


@section('scripts')

<script>
  function handleDelete(id) {
        $('#deleteLink').data('id', id) 
        $('#deleteModal').modal('show')
    }

    function handleDestroy() {
        console.log(1345);
        var id = $('#deleteLink').data('id') 
        var link = document.getElementById('deleteLink')
        link.href = " {{ URL::to('delete-bulan') }}/" + id
    }

</script>

@endsection