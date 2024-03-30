@extends('template')

@section('main')
    <form action="{{ route('upload.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2>Upload File</h2>
        <div class="mb-3">
            <label for="formFile" class="form-label">Pilih Gambar</label>
            <input class="form-control" type="file" name="image">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{asset('storage/'. $item->image)}}" width="100" alt=""></td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
