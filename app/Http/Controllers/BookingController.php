<?php

namespace App\Http\Controllers;
use App\Models\Venue;
use App\Models\Catering;
use App\Models\Theme;
use App\Models\Cake;
use App\Models\Dj;
use App\Models\Details;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
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
        return view('booking', compact('venues', 'themes', 'djs', 'cakes', 'caterings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $details = new Details;
        $details->number_of_guest = $request->input('number_of_guest');
        $details->venue_id = $request->input('venue');
        $details->catering_id = $request->input('catering');
        $details->theme_id = $request->input('theme');
        $details->cake_id = $request->input('cake');
        $details->dj_id = $request->input('dj');
        $details->user_id = auth()->user()->id;
        $details->save();

        $booking = new Booking;
        $booking->details_id = $details->id;
        $booking->user_id = auth()->user()->id;
        $booking->bride_name = $request->input('bride_name');
        $booking->groom_name = $request->input('groom_name');
        $booking->wedding_date = $request->input('wedding_date');
        $booking->time = $request->input('time');
        $booking->save();
        return redirect()->route('/')->with('success', 'Booking added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
