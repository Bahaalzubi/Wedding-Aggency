<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function index()
    {
        $venues = Venue::all();
        
        return view('venues', compact('venues'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_venue');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $venue = Venue::create([
            'name' => $request->input('name'),
            'location' => $request->input('location'),
            'phone' => $request->input('phone'),
            'details' => $request->input('details'),
            'price' => $request->input('price')
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('features/images', $imageName);
            $venue->image = $imageName;
            $venue->save();
        }
        // Handle image upload if needed

        return redirect()->route('admin.features')->with('success', 'Venue added successfully.');
    }
}
