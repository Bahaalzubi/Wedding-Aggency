<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use App\Models\Catering;
use App\Models\Theme;
use App\Models\Cake;
use App\Models\Dj;
use Illuminate\Http\Request;

class AdminFeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $venues = Venue::all();
        $caterings = Catering::all();
        $themes = Theme::all();
        $djs = Dj::all();
        $cakes = Cake::all();
        return view('admin.features', compact('venues', 'themes', 'djs', 'cakes', 'caterings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
{
    // Store the data for the selected feature based on the request

    // if ($request->has('venue')) {
    //     // Store the venue data
    //     $venue = Venue::create([
    //         'name' => $request->input('venueName'),
    //         'location' => $request->input('venueLocation'),
    //         'phone' => $request->input('venuePhone'),
    //         'details' => $request->input('venueDetails'),
    //         'price' => $request->input('venuePrice')
    //     ]);

    //     if ($request->hasFile('image')) {
    //         $image = $request->file('venueImage');
    //         $imageName = time() . '.' . $image->getClientOriginalExtension();
    //         $image->move('features/images', $imageName);
    //         $venue->image = $imageName;
    //         $venue->save();
    //     }

    //     return redirect()->route('admin.features.store')->with('success', 'Venue added successfully.');
    // }

    // if ($request->has('catering')) {
    //     // Store the catering data
    //     $catering = Catering::create([
    //         'name' => $request->input('name'),
    //         'price' => $request->input('price'),
    //         'type' => $request->input('type'),
    //         'details' => $request->input('details')
    //     ]);

    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         $imageName = time() . '.' . $image->getClientOriginalExtension();
    //         $image->move('features/images', $imageName);
    //         $catering->image = $imageName;
    //         $catering->save();
    //     }

    //     return redirect()->route('admin.features.store')->with('success', 'Catering added successfully.');
    // }

    if ($request->has('theme')) {
        // Store the theme data
        $theme = Theme::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'details' => $request->input('details')
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('features/images', $imageName);
            $theme->image = $imageName;
            $theme->save();
        }

        return redirect()->route('admin.features.store')->with('success', 'Theme added successfully.');
    }

    if ($request->has('cake')) {
        // Store the cake data
        $cake = Cake::create([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'details' => $request->input('details'),
            'price' => $request->input('price')
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('features/images', $imageName);
            $cake->image = $imageName;
            $cake->save();
        }

        return redirect()->route('admin.features.store')->with('success', 'Cake added successfully.');
    }

    if ($request->has('dj')) {
        // Store the DJ data
        $dj = Dj::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'details' => $request->input('details'),
            'price' => $request->input('price')
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('features/images', $imageName);
            $dj->image = $imageName;
            $dj->save();
        }

        return redirect()->route('admin.features.store')->with('success', 'DJ added successfully.');
    }

    return redirect()->route('admin.features.store')->with('success', 'Feature added successfully.');
}

    // Add other methods (show, edit, update, destroy) here...

}
