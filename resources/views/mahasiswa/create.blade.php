@extends('app')
@section('content')
    <h3 class='judul mb-4'>Create Mahasiswa</h3>
    <div class="container">
        <form method="POST" action="{{ route('mahasiswa.store') }}">
            @csrf

            <div class="form-group">
                <label>Nama Mahasiswa <span class="text-danger" role="alert">*</span></label>
                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" required>
                @error('nama')
                            <strong>{{ $message }}</strong>
                    @enderror
            </div>

            <div class="form-group">
                <label>NIM <span class="text-danger" role="alert">*</span></label>
                <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" required>
                @error('nim')
                            <strong>{{ $message }}</strong>
                    @enderror
            </div>

            <div class="form-group">
                <label>Tanggal Lahir <span class="text-danger" role="alert">*</span></label>
                <input id="tgl_lahir" type="date" class="form-control @error('Tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" required>
                @error('Tanggal_lahir')
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
                <label>Tahun Masuk <span class="text-danger" role="alert">*</span></label>
                <input id="tahun_masuk" type="text" class="form-control @error('tahun_masuk') is-invalid @enderror" name="tahun_masuk" required>
                @error('tahun_masuk')
                            <strong>{{ $message }}</strong>
                    @enderror
            </div>

            <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-danger" href="{{ route('mahasiswa.index') }}">Cancel</a>
            </div>
        </form>
    </div>
@endsection