@extends('template')

@section('main')
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">NIS</label>
            <input type="number" class="form-control @error('nis') is-invalid @enderror" name="nis"
                value="{{ old('nis') }}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                value="{{ old('nama') }}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                value="{{ old('alamat') }}" aria-describedby="emailHelp">
        </div>

        <select class="form-select form-select-sm" aria-label="Small select example" name="sekolah_id">
            @foreach ($sekolah as $item)
                <option value="{{ $item->id }}">{{ $item->nama_sekolah }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
@endsection
