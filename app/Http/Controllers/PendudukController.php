<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Agama;
use App\Models\Penduduk;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PendudukController extends Controller
{
    public function index()
    {
        $data = Penduduk::orderBy('id', 'DESC')->paginate(15);
        return view('admin.penduduk.index', compact('data'));
    }

    public function create()
    {
        $agama = Agama::get();
        $pendidikan = Pendidikan::get();
        $desa = Desa::get();
        return view('admin.penduduk.create', compact('agama', 'pendidikan', 'desa'));
    }
    public function edit($id)
    {
        $data = Penduduk::find($id);
        $agama = Agama::get();
        $pendidikan = Pendidikan::get();
        $desa = Desa::get();
        return view('admin.penduduk.edit', compact('data', 'agama', 'pendidikan', 'desa'));
    }
    public function store(Request $req)
    {
        $check = Penduduk::where('nik', $req->nik)->first();
        if ($check != null) {
            Session::flash('error', 'Sudah Ada');
            return back();
        } else {
            Penduduk::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/penduduk');
        }
    }
    public function update(Request $req, $id)
    {
        $data = Penduduk::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/penduduk');
    }
    public function delete($id)
    {
        $data = Penduduk::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/penduduk');
    }
}
