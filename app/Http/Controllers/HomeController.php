<?php

namespace App\Http\Controllers;

use App\backend\Category;
use App\frontend\Contact;
use App\backend\Item;
use App\frontend\Reservation;
use App\backend\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryCount = Category::count();
        $itemCount = Item::count();
        $sliderCount = Slider::count();
        $reservations = Reservation::where('status',false)->get();
        $contactCount = Contact::count();
        return view('backend.dashboard',compact('categoryCount','itemCount','sliderCount','reservations','contactCount'));
    }
}
