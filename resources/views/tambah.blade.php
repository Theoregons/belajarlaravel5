@extends('template')

@section('main')
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">NIS</label>
            <input type="number" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ old('nis') }}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"  value="{{ old('nama') }}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"  value="{{ old('alamat') }}" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
