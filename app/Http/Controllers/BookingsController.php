<?php

namespace App\Http\Controllers;
use App\Models\Details;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index()
    {
        // Make sure you have the relationships set up correctly in your Eloquent models
        $bookings = Booking::with(['details.dj', 'details.venue', 'details.catering', 'details.theme', 'details.cake', 'user'])->get();
        $totalBookings = Booking::count(); // هنا يتم حساب عدد السجلات
        $totalUsers = User::count(); // هنا يتم حساب عدد المستخدمين
        return view('admin.dashboard', compact('bookings', 'totalBookings', 'totalUsers'));
    }
    
    
    

}
