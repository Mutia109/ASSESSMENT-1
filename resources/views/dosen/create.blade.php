@extends('app')
@section('content')
    <h3 class='judul mb-4'>Create Dosen</h3>
    <div class="container">
        <form method="POST" action="{{ route('dosen.store') }}">
            @csrf

            <div class="form-group">
                <label>Nama dosen <span class="text-danger" role="alert">*</span></label>
                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" required>
                @error('nama')
                            <strong>{{ $message }}</strong>
                    @enderror
            </div>

            <div class="form-group">
                <label>NIDN <span class="text-danger" role="alert">*</span></label>
                <input id="nidn" type="text" class="form-control @error('nim') is-invalid @enderror" name="nidn" required>
                @error('nidn')
                            <strong>{{ $message }}</strong>
                    @enderror
            </div>

            <div class="form-group">
                <label>Alamat <span class="text-danger" role="alert">*</span></label>
                <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name='alamat' rows="3" required></textarea>
                @error('alamat')
                            <strong>{{ $message }}</strong>
                @enderror
            </div>
            
            <div class="form-group">
                <label>Kontak <span class="text-danger" role="alert">*</span></label>
                <input id="kontak" type="phonenumber" class="form-control @error('kontak') is-invalid @enderror" name="kontak" required>
                @error('kontak')
                            <strong>{{ $message }}</strong>
                    @enderror
            </div>

            <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-danger" href="{{ route('dosen.index') }}">Cancel</a>
            </div>
        </form>
    </div>
@endsection