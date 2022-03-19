<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // $task = DB::table('recipe')->get();
        return view('home',[
            "all" => Recipe::all()
        ]);
    }
}
