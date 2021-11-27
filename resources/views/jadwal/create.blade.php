@extends('app')
@section('content')
    <h3 class='judul mb-4'>Create Jadwal</h3>
    <div class="container">
        <form method="POST" action="{{ route('jadwal.store') }}">
            @csrf

            <div class="form-group">
                <label for="mahasiswa" class="col">Mahasiswa</label>
                <select id="mahasiswa" type="text" class="form-control @error('mahasiswa') is-invalid @enderror" name="mahasiswa" required>
                        @foreach ($dataMahasiswa as $mahasiswa)
                            <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->nim }} - {{ $mahasiswa->nama }} </option>
                        @endforeach
                </select>
                @error('mahasiswa')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group">
                <label for="doen" class="col">Dosen</label>
                <select id="dosen" type="text" class="form-control @error('dosen') is-invalid @enderror" name="dosen" required>
                        @foreach ($dataDosen as $dosen)
                            <option value="{{ $dosen->id }}">{{ $dosen->nidn }} - {{ $dosen->nama }} </option>
                        @endforeach
                </select>
                @error('dosen')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>


            <div class="form-group">
                <label for="judul" class="col">Judul Jadwal</label>
                <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" required>
                @error('judul')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="deskripsi" class=" col">Deskripsi</label>
                <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name='deskripsi' rows="3" required></textarea>
                @error('deskripsi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="awal" class="col">Pertemuan Awal</label>
                <input id="awal" type="datetime-local" class="form-control @error('awal') is-invalid @enderror" name="awal" required>
                @error('awal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="akhir" class="col">Pertemuan Akhir</label>
                <input id="akhir" type="datetime-local" class="form-control @error('akhir') is-invalid @enderror" name="akhir" required>
                @error('akhir')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
                <a class="btn btn-danger" href="{{ route('jadwal.index') }}">Cancel</a>
            </div>
        </form>
    </div>
@endsection