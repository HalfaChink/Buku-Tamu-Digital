<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edit;
use App\Models\Pengunjung;
use App\Http\Controllers\UserController;
use Carbon\Carbon;

class EditController extends Controller
{
    public function edit()
    {
        $carouselImages = Edit::all();
        return view('adminpanel.edit', compact('carouselImages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('admin/img'), $imageName);

        Edit::create(['image' => $imageName]);

        return redirect()->route('carousel.edit')->with('success', 'Image berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $carousel = Edit::find($id);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('admin/img'), $imageName);

            $carousel->image = $imageName;
            $carousel->save();
        }

        return redirect()->route('carousel.edit')->with('success', 'Image berhasil di update');
    }

    public function destroy($id)
    {
        $carousel = Edit::find($id);
        $carousel->delete();

        return redirect()->route('carousel.edit')->with('success', 'Image berhasil di hapus');
    }

    public function dashboard()
    {
        $today = Carbon::today()->toDateString();
        $todayVisitors = Pengunjung::whereDate('created_at', $today)->get();
        $carouselImages = Edit::all();
        return view('pages.dashboard', compact('carouselImages', 'todayVisitors'));
    }
}
