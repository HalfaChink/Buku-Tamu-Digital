<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunjung;

class UserController extends Controller
{
    public function index()
    {
        $dataPengunjung = Pengunjung::all();

        return view('adminpanel.usertable', compact('dataPengunjung'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'asal' => 'required|string|max:255',
            'email' => 'required|email',
            'no_tlp' => 'required|numeric',
            'jumlah_pengunjung' => 'required|numeric',
        ]);

        Pengunjung::create($validatedData);

        return redirect()->route('usertable')->with('success', 'Data berhasil disimpan!');
    }
}
