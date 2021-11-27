@extends('app')
@section('content')
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand"><h1>Jadwal</h1></a>
    <a class="btn btn-success justify-content-end" href="{{ route('jadwal.create')}}">Create Jadwal</a>
</nav>
    
    <div class="container">
    <div class="row justify-content-center">
        <table class="table table-bordered table-striped table-hover md-0">
            <thead class="thead-dark">
            <tr>
                <th >Mahasiswa</th>
                <th>NIM</th>
                <th >Dosen</th>
                <th >NIDN</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th >Awal</th>
                <th >Akhir</th>
                <th >Action</th>
              </tr>
            </thead>

            <tbody>
            @foreach ($data as $jadwal)
                <tr>
                    <td>{{ $jadwal->getMahasiswa()->nama }}</td>
                    <td>{{ $jadwal->getMahasiswa()->nim }}</td>
                    <td>{{ $jadwal->getDosen()->nama }}</td>
                    <td>{{ $jadwal->getDosen()->nidn }}</td>
                    <td>{{ $jadwal->judul }}</td>
                    <td>{{ $jadwal->deskripsi }}</td>
                    <td>{{ $jadwal->awal }}</td>
                    <td>{{ $jadwal->akhir }}</td>
                    <td>
                        <div class="btn-group" role="group">
                        <a type='submit' class="btn btn-sm btn-info" href="{{ route('jadwal.show', ['jadwal'=> $jadwal->id]) }}">Show</a>
                        <a type='submit' class="btn btn-sm btn-warning" href="{{ route('jadwal.edit', ['jadwal'=> $jadwal->id]) }}">Edit</a>
                        <form method="POST" action="{{ route('jadwal.destroy', ['jadwal'=> $jadwal->id]) }}">
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
