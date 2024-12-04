<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edit;
use App\Models\Visit;
use App\Models\Pengunjung;
use Carbon\Carbon;

class EditController extends Controller
{
    public function edit()
    {
        $carouselImages = Edit::all();
        $visitorData = Visit::all();
        return view('adminpanel.edit', compact('carouselImages', 'visitorData'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'visit_text' => 'required|string|max:255',
        ]);


        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('admin/img'), $imageName);


        Visit::create([
            'image' => $imageName,
            'visit_text' => $request->visit_text,
        ]);

        return redirect()->route('carousel.edit')->with('success', 'Visitor successfully added');
    }

    public function update(Request $request, $id)
    {
        $visitor = Visit::find($id);


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('admin/img'), $imageName);
            $visitor->image = $imageName;
        }


        if ($request->visit_text) {
            $visitor->visit_text = $request->visit_text;
        }

        $visitor->save();

        return redirect()->route('carousel.edit')->with('success', 'Visitor updated successfully');
    }

    public function destroy($id)
    {
        $visitor = Visit::find($id);
        $visitor->delete();

        return redirect()->route('carousel.edit')->with('success', 'Visitor deleted successfully');
    }

    public function dashboard()
    {
        $today = Carbon::today()->toDateString();
        $todayVisitors = Pengunjung::whereDate('created_at', $today)
            ->orderBy('created_at', 'desc')
            ->get();
        $carouselImages = Edit::all();
        $previousVisitors = Visit::all();
        return view('pages.dashboard', compact('carouselImages', 'todayVisitors', 'previousVisitors'));
    }
}
