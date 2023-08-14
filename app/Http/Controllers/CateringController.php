<?php

namespace App\Http\Controllers;

use App\Models\Catering;
use Illuminate\Http\Request;

class CateringController extends Controller
{
    public function index()
    {
        $caterings = Catering::all();
        
        return view('caterings', compact('caterings'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_catering');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $catering = new Catering();
        $catering->name = $request->input('name');
        $catering->price = $request->input('price');
        $catering->type = $request->input('type');
        $catering->details = $request->input('details');
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('features/images', $imageName);
            $catering->image = $imageName;
        }
    
        $catering->save();
    
        return redirect()->route('admin.features')->with('success', 'Catering added successfully.');
    }
    
}
