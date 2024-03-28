@extends('template')
@section('main')
<h2>Edit Data</h2>
    <form action="{{ route('siswa.update', $data->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label class="form-label">NIS</label>
            <input type="number" class="form-control @error('nis') is-invalid @enderror" name="nis"
                value="{{ $data->nis }}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                value="{{ $data->nama }}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                value="{{ $data->alamat }}" aria-describedby="emailHelp">
        </div>
        <select class="form-select form-select-sm" aria-label="Small select example" name="sekolah_id">
            @foreach ($sekolah as $item)
                <option value="{{ $item->id }}" @selected($data->sekolah_id == $item->id)>{{ $item->nama_sekolah }}</option>
            @endforeach
        </select>


        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
@endsection
