<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): View
    {
        return view('home');
    }

    public function home(): View
    {
        return view('front.home');
    }

    public function shop(): View
    {
        return view('front.shop');
    }

    public function contact(): View
    {
        return view('front.contact');
    }
}
