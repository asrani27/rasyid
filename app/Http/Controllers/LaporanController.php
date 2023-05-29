<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Lahir;
use App\Models\Mati;
use App\Models\Nikah;
use App\Models\Usaha;
use App\Models\Penduduk;
use App\Models\Pendidikan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{

    public function index()
    {
        return view('admin.laporan.index');
    }
    public function penduduk()
    {
        $data = Penduduk::get();
        return view('admin.laporan.penduduk', compact('data'));
    }
    public function desa()
    {
        $data = Desa::get();
        return view('admin.laporan.desa', compact('data'));
    }
    public function nikah()
    {
        $data = Nikah::get();
        return view('admin.laporan.nikah', compact('data'));
    }
    public function usaha()
    {
        $data = Usaha::get();
        return view('admin.laporan.usaha', compact('data'));
    }
    public function pendidikan()
    {
        $data = Pendidikan::get();
        return view('admin.laporan.pendidikan', compact('data'));
    }
    public function lahir()
    {
        $data = Lahir::get();
        return view('admin.laporan.lahir', compact('data'));
    }
    public function mati()
    {
        $data = Mati::get();
        return view('admin.laporan.mati', compact('data'));
    }
}
