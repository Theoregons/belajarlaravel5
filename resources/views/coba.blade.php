@extends('template')

@section('main')
    <h2>Ini halaman coba</h2>

    <?php
        for ($i=1; $i <= 5; $i++) { ?>
        <h2>Ini Perulangan</h2>
    <?php } ?>

    @for ($i=1; $i <= 5; $i++)
        <h2>ini menggunakan blade</h2>
    @endfor

    @php
        $no = 10;
        echo $no;
    @endphp

    <img src="{{ asset('img/foto.jpg') }}" width="25%" alt="">
@endsection

