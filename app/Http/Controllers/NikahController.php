<?php

namespace App\Http\Controllers;

use App\Models\Nikah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NikahController extends Controller
{
    public function index()
    {
        $data = Nikah::orderBy('id', 'DESC')->paginate(15);
        return view('admin.nikah.index', compact('data'));
    }

    public function create()
    {
        return view('admin.nikah.create');
    }
    public function edit($id)
    {
        $data = Nikah::find($id);
        return view('admin.nikah.edit', compact('data'));
    }
    public function store(Request $req)
    {
        Nikah::create($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/nikah');
    }
    public function update(Request $req, $id)
    {
        $data = Nikah::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/nikah');
    }
    public function delete($id)
    {
        $data = Nikah::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/nikah');
    }
}
