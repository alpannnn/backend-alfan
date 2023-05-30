@extends('home')
@section('content')

<form action="{{ route('pegawais.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>name:</strong>
                <input type="text" id="name" name="name" class="form-control" placeholder="Masukan Nama">
                @error('name')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                <input type="text" name="alamat" class="form-control" placeholder="Masukan Lokasi">
                @error('alamat')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <strong>No Hp:</strong>
                <input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP">
                @error('no_hp')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
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
            <div class="form-group">
                <label for="jadwals"><strong>Jadwal :</strong></label>
                <select name="jadwal" class="form-select">
                    @foreach ($jadwals as $jadwals)
                    <option value="{{ $jadwals->hari}}">{{$jadwals->hari}}</option>
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn btn-primary mt-4">Submit</button>
            <a button type="submit" class="btn btn-danger mt-4" href="{{ route('pegawais.index') }}">Back</a>
        </div>
    </div>
</form>
@endsection