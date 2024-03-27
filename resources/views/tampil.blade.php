@extends('template')
@section('main')
    <h2>Data Siswa</h2>
    {{-- <a href="{{ url('siswa/create') }}" class="btn btn-primary">Tambah Data URL</a> --}}
    <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Data</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nis</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration	 }}</th>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
