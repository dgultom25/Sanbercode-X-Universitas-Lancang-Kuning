@extends('layouts.master')
@section('title')
Halaman Tambah Cast
@endsection
@section('content')

<form method="Post" action="/cast"> 
  {{-- validation--}}
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

 {{-- form input--}}
    @csrf
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
    </div>

    <div class="form-group">
        <label>Umur</label>
        <input type="number" name="umur" class="form-control" value="{{ old('umur') }}">
    </div>

    <div class="form-group">
        <label>Bio</label>
        <textarea name="bio" class="form-control" cols="30" rows="10">{{ old('bio') }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection