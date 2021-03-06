@extends('app')
@section('content')
<div class="container">
    <div class="row justify-content-start mb-4">
        <h1 class="font-weight-bold">Detail Jadwal<h1>
    </div>

    <div class="row justify-content-start mb-2" style="color: orange">
        <h4 class="font-weight-bold">{{ $jadwal->judul }}<h4>
    </div>

    
    <div class="row justify-content-start mb-2" style="font-size: 15px">
        <p class="">{{ $jadwal->deskripsi }}<p>
    </div>

    
    <div class="row justify-content-start" style="font-size: 15px">
        <p class="font-weight-bold mr-1 mb-0">Dosen :</p>
        <p class="mb-0">{{ $jadwal->getDosen()->alamat }}<p>
    </div>

    
    <div class="row justify-content-start" style="font-size: 15px">
        <p class="font-weight-bold mr-1 mb-0">Mahasiswa :</p>
        <p class="mb-0">{{ $jadwal->getMahasiswa()->alamat }}<p>
    </div>

    <div class="row justify-content-start" style="font-size: 15px">
        <p class="font-weight-bold mr-1 mb-0">Jadwal Awal :</p>
        <p class="mb-0">{{ $jadwal->awal }}<p>
    </div>

    <div class="row justify-content-start" style="font-size: 15px">
        <p class="font-weight-bold mr-1 mb-0">Jadwal Akhir :</p>
        <p class="mb-0">{{ $jadwal->akhir }}<p>
    </div>
</div>
@endsection