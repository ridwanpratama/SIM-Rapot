<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function validation(Request $request)
    {
        $validation = $request->validate([
            'nis' => 'required|unique:siswa,nis',
            'nama_siswa' => 'required',
            'rombel' => 'required',
        ],
        [
            'nis.required' => 'Field ini harus diisi!',
            'nama_siswa.required' => 'Field harus diisi!',
            'rombel.required' => 'Field harus diisi!'
        ]);
    }

    public function index()
    {
        $siswa = Siswa::latest()->paginate(15);
        return view('siswa.index',compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $this->validation($request);

        Siswa::create([
            'nis' => $request->nis,
            'nama_siswa' => $request->nama_siswa,
            'rombel' => $request->rombel
        ]);

        return redirect('siswa');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit',compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $attr = $request->all();
        
        $this->validation($request);

        $siswa->update($attr);
        return redirect()->route('siswa.index');
    }

    public function destroy($id)
    {
        //
    }
}
