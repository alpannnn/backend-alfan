@extends('sidebar')
@section('content')
<form action="{{ route('positions.update',$position->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row g-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Position Name:</strong>
                <input type="text" name="name" value="{{ $position->name }}" class="form-control" placeholder="Position name">
                @error('name')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                <input type="keterangan" name="keterangan" class="form-control" placeholder="keterangan" value="{{ $position->keterangan }}">
                @error('keterangan')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Singkatan:</strong>
                <input type="text" name="alias" value="{{ $position->alias }}" class="form-control" placeholder="alias">
                @error('alias')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
            <a button type="submit" class="btn btn-danger mt-4" href="{{ route('positions.index') }}">Back</a>
        </div>
    </div>
</form>
@endsection