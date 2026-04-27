<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Krs;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;

class KrsController extends Controller
{
     public function index()
    {
        $krs = Krs::with(['mahasiswa', 'matakuliah'])->get();
        return view('krs.index', compact('krs'));
    }
 
    public function create()
    {
        $mahasiswa  = Mahasiswa::all();
        $matakuliah = Matakuliah::all();
        return view('krs.create', compact('mahasiswa', 'matakuliah'));
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'npm'             => 'required|exists:mahasiswa,npm',
            'kode_matakuliah' => 'required|exists:matakuliah,kode_matakuliah',
        ]);
 
        Krs::create($request->all());
 
        return redirect()->route('krs.index')->with('success', 'Data KRS berhasil ditambahkan!');
    }
 
    public function edit($id)
    {
        // Belum berfungsi
    }
 
    public function update(Request $request, $id)
    {
        // Belum berfungsi
    }
 
    public function destroy($id)
    {
        // Belum berfungsi
    }
}
