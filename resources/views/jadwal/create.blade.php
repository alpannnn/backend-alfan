@extends('home')
@section('content')
<form action="{{ route('jadwals.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hari:</strong>
                <input type="text" id="hari" name="hari" class="form-control" placeholder="Masukan Hari Kerja">
                @error('hari')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jabatan:</strong>
                <input type="text" name="jabatan" class="form-control" placeholder="Masukan Jabatan Anda">
                @error('jabatan')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <strong>Jam Kerja:</strong>
                <select name="jam_kerja" class="form-control">
                    <option value="">Pilih Jam Kerja</option>
                    <option value="Shift Pagi">08.00 - 13.00</option>
                    <option value="Shift Sore">13.00 - 20.00</option>
                    <option value="Shift Malam">20.00 - 01.00</option>
                    <!-- Tambahkan opsi shift yang lain sesuai kebutuhan -->
                </select>
                @error('jam_kerja')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary mt-4">Submit</button>
            <a button type="submit" class="btn btn-danger mt-4" href="{{ route('jadwals.index') }}">Back</a>
        </div>
    </div>
</form>
@endsection