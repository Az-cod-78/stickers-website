<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function storepage()
    {
        return view('front-end.store');
    }
    public function cart()
    {
        return view('front-end.cart');
    }
    public function about()
    {
        return view('front-end.about');
    }
    public function contact()
    {
        return view('front-end.contact');
    }
        public function createPage()
    {
        return view('front-end.create-page');
    }
}
