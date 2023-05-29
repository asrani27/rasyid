<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PengajuanController extends Controller
{
    public function index()
    {
        $data = Pengajuan::orderBy('id', 'DESC')->paginate(15);
        return view('admin.pengajuan.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pengajuan.create');
    }
    public function edit($id)
    {
        $data = Pengajuan::find($id);
        return view('admin.pengajuan.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $check = Pengajuan::where('nama', $req->nama)->first();
        if ($check != null) {
            Session::flash('error', 'Sudah Ada');
            return back();
        } else {
            Pengajuan::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/pengajuan');
        }
    }
    public function update(Request $req, $id)
    {
        $data = Pengajuan::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/pengajuan');
    }
    public function delete($id)
    {
        $data = Pengajuan::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/pengajuan');
    }
}
