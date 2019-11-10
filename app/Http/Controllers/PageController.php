<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $name = "Yuriy";
        return view('pages.about')->with('name', $name);
    }
}
