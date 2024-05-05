<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index()
    {
        $pageTitle = 'CAKNO BAN';

        return view('welcome', ['pageTitle' => $pageTitle]);
    }
}
