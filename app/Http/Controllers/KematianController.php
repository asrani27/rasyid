<?php

namespace App\Http\Controllers;

use App\Models\Mati;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KematianController extends Controller
{
    public function index()
    {
        $data = Mati::orderBy('id', 'DESC')->paginate(15);
        return view('admin.mati.index', compact('data'));
    }

    public function create()
    {
        return view('admin.mati.create');
    }
    public function edit($id)
    {
        $data = Mati::find($id);
        return view('admin.mati.edit', compact('data'));
    }
    public function store(Request $req)
    {
        Mati::create($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/mati');
    }
    public function update(Request $req, $id)
    {
        $data = Mati::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/mati');
    }
    public function delete($id)
    {
        $data = Mati::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/mati');
    }
}
