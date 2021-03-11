<?php

namespace App\Http\Controllers;

use App\Upd;
use Illuminate\Http\Request;

class UpdController extends Controller
{
    public function validation(Request $request)
    {
        $validation = $request->validate([
            'siswa_id' => 'required|unique:upd,siswa_id',
            'detail_upd_id' => 'required',
            'nilai_upd' => 'required',
        ],
        [
            'siswa_id.required' => 'Field ini harus diisi!',
            'detail_upd_id.required' => 'Field ini harus diisi!',
            'nilai_upd.required' => 'Field ini harus diisi!'
        ]);
    }

    public function index()
    {
        $upd = Upd::all();
        return view('upd.index',compact('upd'));
    }

    public function create()
    {
        return view('upd.create');
    }

    public function store(Request $request)
    {
        $this->validation($request);

        Upd::create([
            'siswa_id' => $request->siswa_id,
            'detail_upd_id' => $request->detail_upd_id,
            'nilai_upd' => $request->nilai_upd
        ]);

        return redirect('upd');
    }

    public function edit($id)
    {
        $upd = Upd::find($id);
        return view('upd.edit',compact('upd'));
    }

    public function update(Request $request, $id)
    {
        $upd = Upd::find($id);
        $upd->update([
            'siswa_id' => $request->get('siswa_id'),
            'detail_upd_id' => $request->get('detail_upd_id'),
            'nilai_upd' => $request->get('nilai_upd')

        ]);

        return redirect()->route('upd.index')->with('message','Mapel berhasil di perbarui');
    }

    public function destroy($id)
    {
        $upd = Upd::find($id);
        $upd->delete();
        return redirect('upd');
    }
}
