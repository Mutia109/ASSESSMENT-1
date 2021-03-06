@extends('app')
@section('content')
<div class="container">
    <div class="row justify-content-start mb-4">
        <h1 class="font-weight-bold">Detail Mahasiswa<h1>
    </div>

    <div class="row justify-content-start mb-2" style="color: orange">
        <h4 class="font-weight-bold">{{ $mahasiswa->nama }}<h4>
    </div>

    <div class="row justify-content-start" style="font-size: 15px">
        <p class="font-weight-bold mr-1 mb-0">NIM :</p>
        <p class="mb-0">{{ $mahasiswa->nim }}<p>
    </div>

    <div class="row justify-content-start" style="font-size: 15px">
        <p class="font-weight-bold mr-1 mb-0">Tanggal Lahir :</p>
        <p class="mb-0">{{ $mahasiswa->Tanggal_lahir }}<p>
    </div>

    <div class="row justify-content-start" style="font-size: 15px">
        <p class="font-weight-bold mr-1 mb-0">Alamat :</p>
        <p class="mb-0">{{ $mahasiswa->alamat }}<p>
    </div>

    <div class="row justify-content-start" style="font-size: 15px">
        <p class="font-weight-bold mr-1 mb-0">Tahun Masuk :</p>
        <p class="mb-0">{{ $mahasiswa->tahun_masuk }}<p>
    </div>
</div>
@endsection
