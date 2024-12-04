<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunjung;
use Carbon\Carbon;

class UserController extends Controller
{
    public function chartData()
    {
        $pengunjungPerBulan = Pengunjung::selectRaw("EXTRACT(MONTH FROM created_at) as month, SUM(jumlah_pengunjung) as total")
            ->groupBy('month')
            ->pluck('total', 'month')
            ->toArray();

        $data = [];
        for ($i = 1; $i <= 12; $i++) {
            $data[] = $pengunjungPerBulan[$i] ?? 0;
        }

        return response()->json($data);
    }


    public function index()
    {
        $today = Carbon::today()->toDateString();
        $dataPengunjung = Pengunjung::whereDate('created_at', $today)->get();
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
            'tujuan_detail' => 'required|string|max:1000',
            'komentar' => 'nullable|string|max:1000',
        ]);
        if (!$request->has('komentar')) {
            $validatedData['komentar'] = null;
        }

        try {
            Pengunjung::create($validatedData);
            return redirect()->route('register')->with('success', 'Data berhasil disimpan!');
        } catch (\Exception $e) {
            return redirect()->route('register')->with('error', 'Data gagal disimpan! Silakan coba lagi.');
        }
    }



    public function destroy($id)
    {
        $pengunjung = Pengunjung::findOrFail($id);
        $pengunjung->delete();

        return redirect()->route('usertable')->with('success', 'Data berhasil dihapus.');
    }
}
