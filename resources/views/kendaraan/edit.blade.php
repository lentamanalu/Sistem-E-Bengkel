<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem E-Bengkel - Edit Kendaraan</title>
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
    <h2 class="mb-3">Edit Data Kendaraan</h2>

    <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Plat Nomor</label>
            <input type="text" name="plat_nomor" class="form-control" value="{{ old('plat_nomor', $kendaraan->plat_nomor) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Pemilik</label>
            <input type="text" name="nama_pemilik" class="form-control" value="{{ old('nama_pemilik', $kendaraan->nama_pemilik) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Merk Kendaraan</label>
            <select name="merk_kendaraan" class="form-select" required>
                <option value="Honda" {{ $kendaraan->merk_kendaraan == 'Honda' ? 'selected' : '' }}>Honda</option>
                <option value="Yamaha" {{ $kendaraan->merk_kendaraan == 'Yamaha' ? 'selected' : '' }}>Yamaha</option>
                <option value="Toyota" {{ $kendaraan->merk_kendaraan == 'Toyota' ? 'selected' : '' }}>Toyota</option>
                <option value="Suzuki" {{ $kendaraan->merk_kendaraan == 'Suzuki' ? 'selected' : '' }}>Suzuki</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Keluhan</label>
            <textarea name="keluhan" class="form-control" rows="3" required>{{ old('keluhan', $kendaraan->keluhan) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>