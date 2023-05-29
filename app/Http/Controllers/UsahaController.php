<?php

namespace App\Http\Controllers;

use App\Models\Usaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UsahaController extends Controller
{
    public function index()
    {
        $data = Usaha::orderBy('id', 'DESC')->paginate(15);
        return view('admin.usaha.index', compact('data'));
    }

    public function create()
    {
        return view('admin.usaha.create');
    }
    public function edit($id)
    {
        $data = Usaha::find($id);
        return view('admin.usaha.edit', compact('data'));
    }
    public function store(Request $req)
    {
        Usaha::create($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/usaha');
    }
    public function update(Request $req, $id)
    {
        $data = Usaha::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/usaha');
    }
    public function delete($id)
    {
        $data = Usaha::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/usaha');
    }
}
