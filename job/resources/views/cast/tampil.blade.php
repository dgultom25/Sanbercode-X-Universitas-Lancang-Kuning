@extends('layouts.master')

@section('title')
Halaman Tampil Cast
@endsection

@section('content')
<a href="/cast/create" class="btn btn-sm btn-primary">Tambah</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Bio</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @forelse ($cast as $key => $item)
  <tr>
      <th scope="row">{{ $key + 1 }}</th>
      <td>{{ $item->nama }}</td>
      <td>{{ $item->umur }}</td>
      <td>{{ $item->bio }}</td>
      <td>

          <from action="/cast/{{$item->id}}"method="post">
          <a href="/cast/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
          <a href="/cast/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
            @csrf
            @method("Delete")
            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
      </td>
    </tr>
    @empty
    <tr>
        <td colspan="5">Cast belum ada</td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection
