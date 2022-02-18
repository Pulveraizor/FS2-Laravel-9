<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    public function contact(Request $request) {
        return view('Pages.contact');
    }
}
