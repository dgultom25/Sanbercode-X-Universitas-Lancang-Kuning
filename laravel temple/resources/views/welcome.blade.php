@extends('layouts.master')
@section('title')

Mendaftar
    @endsection
        @section('content')
<body>
    <h1>Selamat Datang {{ $fname }} {{ $lname }}</h1>
    <h3>Terima kasih telah bergabung di sanberbook. Social Media kita bersama!</h3>

  <a href="/">kembali</a>
         @endsection
