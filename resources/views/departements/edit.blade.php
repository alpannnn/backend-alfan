@extends('sidebar')
@section('content')

<form action="{{ route('departements.update', $departement->id ) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $departement->name}}" class=" form-control" placeholder="name">
                @error('name')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lokasi :</strong>
                <input type="text" name="location" value="{{ $departement->location}}" class="form-control" placeholder="location">
                @error('location')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Manager :</strong>
                <select name="manager_id" class="form-control">
                    @foreach ($managers as $manager)
                    <option value="{{ $manager->id}}" {{($departement->manager_id == $manager->id) ? 'selected' : ''}}>{{$manager->name}}</option>
                    @endforeach
                </select>
                @error('manager_id')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-4">Submit</button>
            <a button type="submit" class="btn btn-danger mt-4" href="{{ route('departements.index') }}">Back</a>
        </div>
    </div>
</form>
@endsection