<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MHSController extends Controller
{
    public function index()
    {
        //get posts
        $mahasiswa = mahasiswa::latest()->paginate(5);
        //render view with posts
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'prodi_nama' => 'required',
            'kelas_nama' => 'required',
        ]);

        mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Student created successfully.');
    }

    public function edit(mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, mahasiswa $mahasiswa)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'prodi_nama' => 'required',
            'kelas_nama' => 'required',
        ]);

        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Student updated successfully');
    }

    public function show(mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Student deleted successfully');
    }
}
