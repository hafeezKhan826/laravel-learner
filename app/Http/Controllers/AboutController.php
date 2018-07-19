<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function about() {
        $title = 'Made it!';
        return view('pages.about')->with('title', $title);
    }
}
