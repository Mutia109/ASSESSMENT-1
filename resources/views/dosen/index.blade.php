@extends('app')
@section('content')
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand"><h1>Create Dosen</h1></a>
    <a class="btn btn-success justify-content-end" href="{{ route('dosen.create')}}">Create Dosen</a>
    </nav>
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-bordered table-striped table-hover md-0">
            <thead class="thead-dark">
              <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>NIDN</th>
                <th>Alamat</th>
                <th>Kontak</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($dosen as $dosen)
                <tr>
                    <th>{{ $dosen->id }}</th>
                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->nidn }}</td>
                    <td>{{ $dosen->alamat }}</td>
                    <td>{{ $dosen->kontak }}</td>
                    <td>
                        <div class="btn-group" role="group">
                        <a type='submit' class="btn btn-sm btn-info" href="{{ route('dosen.show', ['dosen'=> $dosen->id]) }}">Show</a>
                        <a type='submit' class="btn btn-sm btn-warning" href="{{ route('dosen.edit', ['dosen'=> $dosen->id]) }}">Edit</a>
                        <form method="POST" action="{{ route('dosen.destroy', ['dosen'=> $dosen->id]) }}">
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