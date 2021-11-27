@extends('app')
@section('content')
<h3 class='judul mb-4'>Edit Mahasiswa</h3>
<div class="container">
        <form method="POST" action="{{ route('mahasiswa.update', ['mahasiswa'=> $mahasiswa->id]) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nama Mahasiswa <span class="text" role="alert"></span></label>

                <div class="text">
                    <input 
                        id="nama" 
                        type="text" 
                        class="form-control @error('nama') is-invalid @enderror" 
                        name="nama" 
                        value="{{ $mahasiswa->nama }}"
                        required >

                    @error('nama')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>NIM <span class="text" role="alert"></span></label>

                <div class="text">
                    <input 
                        id="nim" 
                        type="text" 
                        class="form-control @error('nim') is-invalid @enderror" 
                        name="nim" 
                        value="{{ $mahasiswa->nim }}"
                        required >

                    @error('nim')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Tanggal Lahir <span class="text" role="alert"></span></label>

                <div class="text">
                    <input 
                        id="tanggal_lahir" 
                        type="date" 
                        class="form-control @error('Tanggal_lahir') is-invalid @enderror" 
                        name="tanggal_lahir" 
                        value="{{ $mahasiswa->Tanggal_lahir }}"
                        required >

                    @error('tanggal_lahir')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Alamat <span class="text" role="alert"></span></label>

                <div class="text">
                    <input 
                        id="alamat" 
                        type="textarea" 
                        class="form-control @error('alamat') is-invalid @enderror" 
                        name="alamat" 
                        value="{{ $mahasiswa->alamat }}"
                        required >

                    @error('alamat')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Tahun Masuk <span class="text" role="alert"></span></label>

                <div class="text">
                    <input 
                        id="tahun_masuk" 
                        type="text" 
                        class="form-control @error('tahun_masuk') is-invalid @enderror" 
                        name="tahun_masuk" 
                        value="{{ $mahasiswa->tahun_masuk }}"
                        required >

                    @error('alamat')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a class="btn btn-danger" href="{{ route('mahasiswa.index') }}">Cancel</a>
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection