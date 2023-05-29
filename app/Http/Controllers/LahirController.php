<?php

namespace App\Http\Controllers;

use App\Models\Lahir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LahirController extends Controller
{
    public function index()
    {
        $data = Lahir::orderBy('id', 'DESC')->paginate(15);
        return view('admin.lahir.index', compact('data'));
    }

    public function create()
    {
        return view('admin.lahir.create');
    }
    public function edit($id)
    {
        $data = Lahir::find($id);
        return view('admin.lahir.edit', compact('data'));
    }
    public function store(Request $req)
    {
        Lahir::create($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/lahir');
    }
    public function update(Request $req, $id)
    {
        $data = Lahir::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/lahir');
    }
    public function delete($id)
    {
        $data = Lahir::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/lahir');
    }
}
