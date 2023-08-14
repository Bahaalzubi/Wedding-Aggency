<?php

namespace App\Http\Controllers;

use App\Models\Cake;
use Illuminate\Http\Request;

class CakeController extends Controller
{
    public function index()
    {
        $cakes = Cake::all();
        
        return view('cake', compact('cakes'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_cake');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cake = new Cake();
        $cake->name = $request->input('name');
        $cake->price = $request->input('price'); 
        $cake->type = $request->input('type');
        $cake->details = $request->input('details');
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('features/images', $imageName);
            $cake->image = $imageName;
        }
    
        $cake->save();
    
        return redirect()->route('admin.features')->with('success', 'Catering added successfully.');
    }
    
}
