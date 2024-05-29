<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Promo;
use App\Models\Venue;

class indexController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        $promo = Promo::all();
        $venue = Venue::all();
        return view('index', compact('menu', 'promo', 'venue'));
    }
}
