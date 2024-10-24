<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungan;

class KunjunganController extends Controller
{
    public function index()
    {
        $dataPerjalanan = Kunjungan::all();

        return view('adminpanel.historytable', compact('dataPerjalanan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tujuan' => 'required|string|max:255',
            'tujuan_detail' => 'required|string|max:255',
            'komentar' => 'required|string|max:1000',
        ]);        

        Kunjungan::create([
            'tujuan' => $request->tujuan,
            'tujuan_detail' => $request->tujuan_detail,
            'komentar' => $request->komentar,
            'tanggal' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'Data kunjungan berhasil disimpan!');
    }
}
