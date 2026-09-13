<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function catalogue()
    {
        return view('pages.catalogue');
    }

    public function aboutUs()
    {
        return view('pages.about-us');
    }

    public function detail()
    {
        return view('pages.detail');
    }

    public function checkout()
    {
        return view('pages.check-out');
    }

    public function reserve()
    {
        return view('pages.reserve');
    }

    public function history()
    {
        return view('pages.history');
    }

    public function add()
    {
        return view('pages.add');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function signUp()
    {
        return view('pages.sign-up');
    }

    public function cart()
    {
        return view('pages.cart');
    }
}