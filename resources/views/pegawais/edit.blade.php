@extends('home')
@section('content')
<form action="{{ route('pegawais.update',$pegawai->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row g-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pegawai:</strong>
                <input type="text" name="name" value="{{ $pegawai->name }}" class="form-control" placeholder="Nama Pegawai">
                @error('name')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                <input type="keterangan" name="alamat" class="form-control" placeholder="Alamat Pegawai" value="{{ $pegawai->alamat }}">
                @error('alamat')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pilih Shift Kerja:</strong>
                    <select name="shift" class="form-control">
                        <option value="">Pilih Jenis Penyakit</option>
                        <option value="Shift Pagi">Shift Pagi</option>
                        <option value="Shift Sore">Shift Sore</option>
                        <option value="Shift Malam">Shift Malam</option>
                    </select>
                    @error('shift')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jadwal:</strong>
                <select name="jadwal" class="form-control">
                    @foreach ($jadwals as $jadwal)
                    <option value="{{ $jadwal->hari}}" {{($jadwal->jadwal == $jadwal->hari) ? 'selected' : ''}}>{{$jadwal->hari}}</option>
                    @endforeach
                </select>
                @error('jadwal')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>


            <div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
                <a button type="submit" class="btn btn-danger mt-4" href="{{ route('pegawais.index') }}">Back</a>
            </div>
        </div>
</form>
@endsection