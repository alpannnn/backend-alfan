@extends('home')
@section('content')
<form action="{{ route('jadwals.update',$jadwal->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row g-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hari Kerja:</strong>
                <input type="text" name="hari" value="{{ $jadwal->hari }}" class="form-control" placeholder="Hari Kerja">
                @error('hari')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jabatan:</strong>
                <input type="jabatan" name="jabatan" class="form-control" placeholder="Jabatan Anda" value="{{ $jadwal->jabatan }}">
                @error('jabatan')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jam Kerja:</strong>
                <select name="jam_kerja" class="form-control">
                    <option value="">Pilih Jam Kerja</option>
                    <option value="Shift Pagi" {{ $jadwal->jam_kerja == 'jam_kerja pagi' ? 'selected' : '' }}>08.00 - 13.00</option>
                    <option value="Shift Sore" {{ $jadwal->jam_kerja == 'jam_kerja sore' ? 'selected' : '' }}>13.00 - 20.00</option>
                    <option value="Shift Malam" {{ $jadwal->jam_kerja == 'jam_kerja malam' ? 'selected' : '' }}>20.00 - 01.00</option>
                    <!-- Tambahkan opsi jam_kerja sesuai kebutuhan -->
                </select>
                @error('jam_kerja')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
            <a button type="submit" class="btn btn-danger mt-4" href="{{ route('jadwals.index') }}">Back</a>
        </div>
    </div>
</form>
@endsection