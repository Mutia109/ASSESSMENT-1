@extends('app')
@section('content')
    <div class="container">
        <h3 class='judul mb-4'>Edit Jadwal</h3>
        <form method="POST" action="{{ route('jadwal.update', ['jadwal' => $jadwal->id]) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="mahasiswa" class="col">Mahasiswa</label>
                <select id="mahasiswa" type="text" class="form-control @error('mahasiswa') is-invalid @enderror" name="mahasiswa" required>
                        @foreach ($dataMahasiswa as $mahasiswa)
                            <option value="{{ $mahasiswa->id }}" @if($jadwal->mahasiswa_id == $mahasiswa->id) selected @endif>{{ $mahasiswa->nim }} - {{ $mahasiswa->nama }} </option>
                        @endforeach
                </select>
                @error('mahasiswa')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="dosen" class="col">Dosen</label>
                <select id="dosen" type="text" class="form-control @error('dosen') is-invalid @enderror" name="dosen" required>
                    @foreach ($dataDosen as $dosen)
                        <option value="{{ $dosen->id }}" @if($jadwal->dosen_id == $dosen->id) selected @endif>{{ $dosen->nidn }} - {{ $dosen->nama }} </option>
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
                <input 
                    id="judul" 
                    type="text" 
                    class="form-control @error('judul') is-invalid @enderror" 
                    name="judul" 
                    value="{{ $jadwal->judul }}"
                    required>

                @error('judul')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="deskripsi" class="col">Deskripsi</label>
                <textarea 
                    class="form-control @error('deskripsi') is-invalid @enderror" 
                    id="deskripsi" 
                    name='deskripsi' 
                    rows="3" 
                    required>{{ $jadwal->deskripsi }}</textarea>

                @error('deskripsi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="awal" class="col">Pertemuan Awal</label>
                <input 
                    id="awal" 
                    type="datetime-local" 
                    class="form-control @error('awal') is-invalid @enderror" 
                    name="awal" 
                    value="{{ date("Y-m-d\TH:i:s", strtotime($jadwal->awal)) }}"
                    required>

                @error('awal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
            <label for="akhir" class="col">Pertemuan Akhir</label>
                <input 
                    id="akhir" 
                    type="datetime-local" class="form-control @error('akhir') is-invalid @enderror" 
                    name="akhir" 
                    value="{{ date("Y-m-d\TH:i:s", strtotime($jadwal->akhir)) }}"
                    required>

                @error('akhir')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
                <a class="btn btn-danger" href="{{ route('jadwal.index') }}">Cancel</a>
                </div>
        </form>
    </div>
@endsection