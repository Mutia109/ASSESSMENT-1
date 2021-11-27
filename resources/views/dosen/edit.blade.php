@extends('app')
@section('content')
<h3 class='judul mb-4'>Edit Dosen</h3>
<div class="container">
        <form method="POST" action="{{ route('dosen.update', ['dosen'=> $dosen->id]) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nama dosen <span class="text" role="alert"></span></label>

                <div class="text">
                    <input 
                        id="nama" 
                        type="text" 
                        class="form-control @error('nama') is-invalid @enderror" 
                        name="nama" 
                        value="{{ $dosen->nama }}"
                        required >

                    @error('nama')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>NIDN <span class="text" role="alert"></span></label>

                <div class="text">
                    <input 
                        id="nidn" 
                        type="text" 
                        class="form-control @error('nidn') is-invalid @enderror" 
                        name="nidn" 
                        value="{{ $dosen->nidn }}"
                        required >

                    @error('nidn')
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
                        value="{{ $dosen->alamat }}"
                        required >

                    @error('alamat')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Kontak <span class="text" role="alert"></span></label>

                <div class="text">
                    <input 
                        id="kontak" 
                        type="text" 
                        class="form-control @error('kontak') is-invalid @enderror" 
                        name="kontak" 
                        value="{{ $dosen->kontak }}"
                        required >

                    @error('kontak')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a class="btn btn-danger" href="{{ route('dosen.index') }}">Cancel</a>
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection