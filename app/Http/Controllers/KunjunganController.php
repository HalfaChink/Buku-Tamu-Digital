<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungan;

class KunjunganController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'tujuan' => 'required|string|max:255',
            'tujuan_detail' => 'required|string|max:255',
            'komentar' => 'required|string|max:1000',
        ]);        

        // Simpan data ke database
        Kunjungan::create([
            'tujuan' => $request->tujuan,
            'tujuan_detail' => $request->tujuan_detail,
            'komentar' => $request->komentar,
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Data kunjungan berhasil disimpan!');
    }
}
