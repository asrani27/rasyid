<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AgamaController extends Controller
{
    public function index()
    {
        $data = Agama::orderBy('id', 'DESC')->paginate(15);
        return view('admin.agama.index', compact('data'));
    }

    public function create()
    {
        return view('admin.agama.create');
    }
    public function edit($id)
    {
        $data = Agama::find($id);
        return view('admin.agama.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $check = Agama::where('nama', $req->nama)->first();
        if ($check != null) {
            Session::flash('error', 'Sudah Ada');
            return back();
        } else {
            Agama::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/agama');
        }
    }
    public function update(Request $req, $id)
    {
        $data = Agama::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/agama');
    }
    public function delete($id)
    {
        $data = agama::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/agama');
    }
}
