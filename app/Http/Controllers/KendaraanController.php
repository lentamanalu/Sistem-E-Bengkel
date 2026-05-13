<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    // Tampilkan semua data
    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraans'));
    }

    // Tampilkan form tambah
    public function create()
    {
        return view('kendaraan.create');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'plat_nomor' => 'required',
            'nama_pemilik' => 'required',
            'merk_kendaraan' => 'required',
            'keluhan' => 'required',
        ]);

        Kendaraan::create($request->all());
        return redirect()->route('kendaraan.index')->with('success', 'Data berhasil ditambahkan');
    }

    // Tampilkan form edit
    public function edit($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        return view('kendaraan.edit', compact('kendaraan'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'plat_nomor' => 'required',
            'nama_pemilik' => 'required',
            'merk_kendaraan' => 'required',
            'keluhan' => 'required',
        ]);

        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->update($request->all());
        return redirect()->route('kendaraan.index')->with('success', 'Data berhasil diupdate');
    }

    // Hapus data
    public function destroy($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->delete();
        return redirect()->route('kendaraan.index')->with('success', 'Data berhasil dihapus');
    }
}