@extends('home')

@section('content')
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
</div>
@endif

<div class="text-end mb-2">
  <a class="btn btn-light" href="{{ route('exporExcel') }}">Cetak</a>
  <a class="btn btn-success" href="{{ route('pegawais.create') }}">Add Pegawai</a>
</div>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">No HP</th>
      <th scope="col">Shift</th>
      <th scope="col">Jadwal</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @php $no = 1 @endphp
    @foreach($pegawais as $data)
    <tr class="table-hover-color">
      <td>{{ $no++ }}</td>
      <!-- <td>{{ $data->id }}</td> -->
      <td>{{ $data->name }}</td>
      <td>{{ $data->alamat }}</td>
      <td>{{ $data->no_hp }}</td>
      <td>{{ $data->shift }}</td>
      <td>{{ $data->jadwal }}</td>
      <td>
        <form action="{{ route('pegawais.destroy', $data->id) }}" method="POST">
          <a class="btn btn-primary" href="{{ route('pegawais.edit', $data->id) }}">Edit</a>
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
