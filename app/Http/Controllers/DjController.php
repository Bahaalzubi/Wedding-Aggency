<?php

namespace App\Http\Controllers;

use App\Models\Dj;
use Illuminate\Http\Request;

class DjController extends Controller
{

    public function index()
    {
        $djs = Dj::all();
        
        return view('dj', compact('djs'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_dj');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dj = new Dj();
        $dj->name = $request->input('name');
        $dj->price = $request->input('price'); 
        $dj->phone = $request->input('phone'); 
        $dj->details = $request->input('details');
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('features/images', $imageName);
            $dj->image = $imageName;
        }
    
        $dj->save();
    
        return redirect()->route('admin.features')->with('success', 'Catering added successfully.');
    }
    
}
