<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prodi;

class ProdiController extends Controller
{
    public function index()
    {
        //get posts
        $prodi = prodi::latest()->paginate(5);
        //render view with posts
        return view('prodi.index', compact('prodi'));
    }

    public function create()
    {
        return view('prodi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'prodi' => 'required',
        ]);

        prodi::create($request->all());

        return redirect()->route('prodi.index')
            ->with('success', 'prodi created successfully.');
    }

    public function edit(prodi $prodi)
    {
        return view('prodi.edit', compact('prodi'));
    }

    public function update(Request $request, prodi $prodi)
    {
        $request->validate([
            'prodi' => 'required',
        ]);

        $prodi->update($request->all());

        return redirect()->route('prodi.index')
            ->with('success', 'prodi updated successfully');
    }

    public function show(prodi $prodi)
    {
        return view('prodi.show', compact('prodi'));
    }

    public function destroy(prodi $prodi)
    {
        $prodi->delete();

        return redirect()->route('prodi.index')
            ->with('success', 'prodi deleted successfully');
    }
}
