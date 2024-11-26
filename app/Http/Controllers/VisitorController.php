<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;

class VisitorController extends Controller
{
    public function edit()
    {
        $visitors = Visit::all();
        return view('adminpanel.visitor-edit', compact('visitors'));
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

        return redirect()->route('visitor.edit')->with('success', 'Visitor successfully added');
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

        return redirect()->route('visitor.edit')->with('success', 'Visitor updated successfully');
    }

    public function destroy($id)
    {
        $visitor = Visit::find($id);
        $visitor->delete();

        return redirect()->route('visitor.edit')->with('success', 'Visitor deleted successfully');
    }
}
