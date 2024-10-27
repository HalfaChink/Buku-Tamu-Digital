<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungan;


class KunjunganController extends Controller
{
    public function history()
    {
        $dataPerjalanan = Kunjungan::all();

        return view('adminpanel.historytable', compact('dataPerjalanan'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tujuan' => 'required|string|max:255',
            'tujuan_detail' => 'required|string',
            'komentar' => 'required|string',
        ]);

        Kunjungan::create($validatedData);

        return redirect()->route('historytable')->with('success', 'Kunjungan berhasil dicatat!');
    }
}
