<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function newaction()
    {
//        echo 'some data';
        return view('new');
    }
}
