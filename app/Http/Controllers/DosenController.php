<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index', compact('dosen'));
    }
 
    public function create()
    {
        return view('dosen.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'nidn' => 'required|max:10|unique:dosen,nidn',
            'nama' => 'required|max:50',
        ]);
 
        Dosen::create($request->all());
 
        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil ditambahkan!');
    }
 
    public function edit($nidn)
    {
        // Belum berfungsi
    }
 
    public function update(Request $request, $nidn)
    {
        // Belum berfungsi
    }
 
    public function destroy($nidn)
    {
        // Belum berfungsi
    }
}
