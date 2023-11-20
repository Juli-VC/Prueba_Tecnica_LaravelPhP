<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendContactController extends Controller
{
    public function index()
    {
        return view('contactSuccess');
    }
}
