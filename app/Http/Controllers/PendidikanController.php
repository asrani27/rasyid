<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PendidikanController extends Controller
{
    public function index()
    {
        $data = Pendidikan::orderBy('id', 'DESC')->paginate(15);
        return view('admin.pendidikan.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pendidikan.create');
    }
    public function edit($id)
    {
        $data = Pendidikan::find($id);
        return view('admin.pendidikan.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $check = Pendidikan::where('nama', $req->nama)->first();
        if ($check != null) {
            Session::flash('error', 'Sudah Ada');
            return back();
        } else {
            Pendidikan::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/pendidikan');
        }
    }
    public function update(Request $req, $id)
    {
        $data = Pendidikan::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/pendidikan');
    }
    public function delete($id)
    {
        $data = Pendidikan::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/pendidikan');
    }
}
