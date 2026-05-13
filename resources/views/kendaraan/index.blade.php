@extends('layouts.app')

@section('content')

<h2>Daftar Servis Kendaraan</h2>

<a href="/kendaraan/create" class="btn btn-primary mb-3">
    Tambah Kendaraan
</a>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Plat Nomor</th>
            <th>Nama Pemilik</th>
            <th>Merk Kendaraan</th>
            <th>Keluhan</th>
        </tr>
    </thead>

    <tbody>
        @foreach($kendaraans as $index => $kendaraan)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $kendaraan->plat_nomor }}</td>
            <td>{{ $kendaraan->nama_pemilik }}</td>
            <td>{{ $kendaraan->merk_kendaraan }}</td>
            <td>{{ $kendaraan->keluhan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection