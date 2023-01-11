<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;

class KelasController extends Controller
{
    public function index()
    {
        //get posts
        $kelas = kelas::latest()->paginate(5);
        //render view with posts
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nama_kelas' => 'required',
            'nama_prodi' => 'required',
        ]);

        kelas::create($request->all());

        return redirect()->route('kelas.index')
            ->with('success', 'kelas created successfully.');
    }

    public function edit(kelas $kelas)
    {
        return view('kelas.edit', compact('kelas'));
    }

    public function update(Request $request, kelas $kelas)
    {
        $request->validate([
            'id' => 'required',
            'nama_kelas' => 'required',
            'nama_prodi' => 'required',
        ]);

        $kelas->update($request->all());

        return redirect()->route('kelas.index')
            ->with('success', 'kelas updated successfully');
    }

    public function show(kelas $kelas)
    {
        return view('kelas.show', compact('kelas'));
    }

    public function destroy(kelas $kelas)
    {
        $kelas->delete();

        return redirect()->route('kelas.index')
            ->with('success', 'kelas deleted successfully');
    }
}
