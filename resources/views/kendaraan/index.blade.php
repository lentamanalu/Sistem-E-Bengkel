<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem E-Bengkel - Daftar Servis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/kendaraan') }}">Sistem E-Bengkel</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/kendaraan') }}">Daftar Servis</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Daftar Servis Kendaraan</h2>
        <a href="{{ route('kendaraan.create') }}" class="btn btn-primary">+ Tambah Kendaraan</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Plat Nomor</th>
                <th>Nama Pemilik</th>
                <th>Merk Kendaraan</th>
                <th>Keluhan</th>
                <th width="150">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($kendaraans as $kendaraan)
            <tr>
                <td>{{ $kendaraan->id }}</td>
                <td>{{ $kendaraan->plat_nomor }}</td>
                <td>{{ $kendaraan->nama_pemilik }}</td>
                <td>{{ $kendaraan->merk_kendaraan }}</td>
                <td>{{ $kendaraan->keluhan }}</td>
                <td>
                    <a href="{{ route('kendaraan.edit', $kendaraan->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    
                    <form action="{{ route('kendaraan.destroy', $kendaraan->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus kendaraan ini dari antrean?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                 </td>
             </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Belum ada data kendaraan</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>