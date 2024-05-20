<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function servicos()
    {
        return view('site.servicos');
    }

    public function contato()
    {
        return view('site.contato');
    }

    public function sobre()
    {
        return view('site.sobre');
    }
}
