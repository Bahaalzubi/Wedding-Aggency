<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index()
    {
        $themes = Theme::all();
        
        return view('themes', compact('themes'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_theme');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $theme = new Theme();
        $theme->name = $request->input('name');
        $theme->price = $request->input('price'); 
        $theme->details = $request->input('details');
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('features/images', $imageName);
            $theme->image = $imageName;
        }
    
        $theme->save();
    
        return redirect()->route('admin.features')->with('success', 'Catering added successfully.');
    }
    
}
