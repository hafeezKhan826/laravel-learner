<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){
        $data = array(
            'title'=>'In the main app',
            'someOtherText' => 'Some Other Text',
            'services' => ['New Ghost in town', 'Shisha', 'Pratham'],

        );
        return view('pages.index')->with($data);
    }

    
}
