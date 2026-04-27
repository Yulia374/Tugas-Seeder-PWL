<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with('dosen')->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }
 
    public function create()
    {
        $dosen = Dosen::all();
        return view('mahasiswa.create', compact('dosen'));
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'npm'  => 'required|max:10|unique:mahasiswa,npm',
            'nidn' => 'required|exists:dosen,nidn',
            'nama' => 'required|max:50',
        ]);
 
        Mahasiswa::create($request->all());
 
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }
 
    public function edit($npm)
    {
        // Belum berfungsi
    }
 
    public function update(Request $request, $npm)
    {
        // Belum berfungsi
    }
 
    public function destroy($npm)
    {
        // Belum berfungsi
    }
}
