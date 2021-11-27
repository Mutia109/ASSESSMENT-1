@extends('app')
@section('content')
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand"><h1>Mahasiswa</h1></a>
    <a class="btn btn-success justify-content-end" href="{{ route('mahasiswa.create')}}">Create Mahasiswa</a>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-bordered table-striped table-hover md-0">
            <thead class="thead-dark">
              <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Tgl lahir</th>
                <th>Alamat</th>
                <th>Tahun Masuk</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mahasiswa)
                <tr>
                    <th>{{ $mahasiswa->id }}</th>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->Tanggal_lahir }}</td>
                    <td>{{ $mahasiswa->alamat }}</td>
                    <td>{{ $mahasiswa->tahun_masuk }}</td>
                    <td>
                        <div class="btn-group" role="group">
                        <a type='submit' class="btn btn-sm btn-info" href="{{ route('mahasiswa.show', ['mahasiswa'=> $mahasiswa->id]) }}">Show</a>
                        <a type='submit' class="btn btn-sm btn-warning" href="{{ route('mahasiswa.edit', ['mahasiswa'=> $mahasiswa->id]) }}">Edit</a>
                        <form method="POST" action="{{ route('mahasiswa.destroy', ['mahasiswa'=> $mahasiswa->id]) }}">
                            @csrf
                            @method('Delete')
                            <button type="submit" class="btn-group btn-sm btn-danger" onclick="return confirm('Hapus Data?')">Delete</button>
                        </form>
                        </div>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>        
</div>
@endsection