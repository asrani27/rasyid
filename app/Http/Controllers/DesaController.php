<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DesaController extends Controller
{
    public function index()
    {
        $data = Desa::orderBy('id', 'DESC')->paginate(15);
        return view('admin.desa.index', compact('data'));
    }

    public function create()
    {
        return view('admin.desa.create');
    }
    public function edit($id)
    {
        $data = Desa::find($id);
        return view('admin.desa.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $check = Desa::where('nama', $req->nama)->first();
        if ($check != null) {
            Session::flash('error', 'Sudah Ada');
            return back();
        } else {
            Desa::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/desa');
        }
    }
    public function update(Request $req, $id)
    {
        $data = Desa::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/desa');
    }
    public function delete($id)
    {
        $data = Desa::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/desa');
    }
}
