<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use App\Models\Recipe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard',[
            "menu" => Recipe::all(),
            "request" => Wish::all()
        ]);
    }

    public function postmenu()
    {
        return view('postmenu',[
            "menu" => Recipe::all(),
            "request" => Wish::all()
            
        ]);
    }

}
