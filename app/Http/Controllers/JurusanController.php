<?php

namespace App\Http\Controllers;

use App\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    
    public function index()
    {
        $jurusans = Jurusan::latest()->paginate(5);
  
        return view('jurusan.index',compact('jurusans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('jurusan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_jurusan' => 'required',
        ]);

        Jurusan::create($request->all());

        return redirect()->route('jurusan.index')
                        ->with('success', 'Data berhasil ditambahkan');
    }

    public function show(Jurusan $jurusan)
    {
        //
    }

    public function edit(Jurusan $jurusan)
    {
        return view('jurusan.edit', compact('jurusan'));
    }

    public function update(Request $request, Jurusan $jurusan)
    {
        $request->validate([
            'nama_jurusan' => 'required',
        ]);

        $jurusan->update($request->all());

        return redirect()->route('jurusan.index')
                        ->with('success', 'Data berhasil diperbarui');
    } 

    public function destroy(Jurusan $jurusan)
    {
        $jurusan->delete();

        return redirect()->route('jurusan.index')
                        ->with('success', 'Data berhasil dihapus');
    }
}
