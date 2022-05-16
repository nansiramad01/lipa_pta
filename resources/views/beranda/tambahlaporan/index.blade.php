@extends('beranda.layouts.main')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h4>Welcome Back, {{ auth()->user()->name }} </h4>

</div>

<h4>Laporan Keadaan Perkara </h4>


{{-- <form class="d-flex mt-3 mb-4" method="GET" action="{{ url('satuankerja') }}">
  <div class="col-md-3">
    <input class="form-control" type="text" name="keyword" value="{{ $keyword }}" />
  </div>
  <button class="btn btn-info" type="submit">Search</button>
</form> --}}

<div class="input-group mb-3">
  {{-- <div class="input-group-prepend"> --}}
    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
      aria-expanded="false">Dropdown</button>

    <div class="dropdown-menu">
      @for ($i = 1; $i < 27; $i++) <button class="dropdown-item" onclick="getForm({{$i}})">LIPA {{$i}}</button>
        @endfor
    </div>
    {{--
  </div> --}}
  <input type="text" class="form-control" aria-label="Text input with dropdown button">
</div>



<table id="example" class="table table-striped table-bordered" style="width:100%">
  <thead class="table-info">
    <th>NO</th>
    {{-- <th>Kode Lipa</th> --}}
    <th>File Laporan</th>
    {{-- <th class="text-center" colspan="3">Aksi</th> --}}
  </thead>
  <tbody>

    {{-- @foreach ($data as $key=>$value)
    <tr>
      <td> {{ $loop->iteration }} </td>
      <td> {{ $value->kode_lipa }} </td>
      <td> {{ $value->id_bulan }} </td>
      <td class="text-center"> <a class="btn btn-success" href=" {{ url('satuankerja/'.$value->id.'/edit') }} ">Edit</a>
      </td>
      <td class="text-center">
        <form action=" {{ url('satuankerja/'.$value->id) }} " method="post">
          @csrf
          <input type="hidden" name="_method" value="DELETE">
          <button class="btn btn-danger" type="submit">Hapus</button>
        </form>
      </td>
    </tr>

    @endforeach --}}

  </tbody>
</table>
<div id="formLipa" class="">
  <p>Form Disini</p>
</div>

{{-- {{ $data->links() }} --}}


@endsection
@section('scripts')
<script>
  async function getForm(id) {
  let res = await fetch('{{ route('laporan.form')}}'+'/'+id).then(res => res.json())
  $('#formLipa').html(res);
}
</script>
@endsection