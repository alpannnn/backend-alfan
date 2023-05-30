@extends('home')
@section('content')
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
</div>
@endif
<div class="text-end mb-2">
  <a class="btn btn-light" href="{{ route('exporExcel') }}"> Cetak</a>
  <a class="btn btn-success" href="{{ route('jadwals.create') }}"> Add Jadwal</a>
</div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Hari</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Jam Kerja</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @php $no = 1 @endphp
    @foreach ($jadwals as $data)
    <tr class="table-hover-color">
      <td>{{ $no ++ }}</td>
      <!-- <td>{{ $data->id }}</td> -->
      <td>{{ $data->hari }}</td>
      <td>{{ $data->jabatan }}</td>
      <td>{{ $data->jam_kerja}}</td>

      <td>
        <form action="{{ route('jadwals.destroy',$data->id) }}" method="Post">
          <a class="btn btn-primary" href="{{ route('jadwals.edit',$data->id) }}">Edit</a>
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection