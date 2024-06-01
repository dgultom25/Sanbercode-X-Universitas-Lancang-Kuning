@extends('layouts.master')
@section('title')
Halaman Edit Cast
@endsection
@section('content')

<form method="Post" action="/cast/{{$cast->id}}"> 
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
    @method("put")
    <div class="form-group">
        <label>Nama</label>
        <input type="text" value="{{$cast->nama}}"name="nama" class="form-control" value="{{ old('nama') }}">
    </div>

    <div class="form-group">
        <label>Umur</label>
        <input type="number" value="{{$cast->umur}}" name="umur" class="form-control" value="{{ old('umur') }}">
    </div>

    <div class="form-group">
        <label>Bio</label>
        <textarea name="bio" class="form-control" cols="30" rows="10">{{$cast->bio}} {{ old('bio') }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection