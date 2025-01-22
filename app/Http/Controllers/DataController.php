<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\divisipohoninduk;
use App\Models\DevisiPohonInduk;


class DataController extends Controller
{
    public function index()
    {
        return view('admin.tambahdata');
    }

    public function upload(Request $request)
    {
        $data = new Divisipohoninduk;
        $data->bulan = $request->bulan;
        $data->tahun = $request->tahun;
        $data->target = $request->target;
        $data->realisasi = $request->realisasi;

        $data->save();
        return redirect()->back()->with('success', 'User berhasil diverifikasi!');
    }

    public function show()
    {
        $divisipohoninduk = Divisipohoninduk::all();
        return view('admin.index', compact('divisipohoninduk'));
    }

    public function showGrafik()
    {
        // Ambil data dari database
        $devisipohoninduk = Divisipohoninduk::all();

        // Kirim data ke view
        return view('admin.chart', compact('devisipohoninduk'));
    }

}
