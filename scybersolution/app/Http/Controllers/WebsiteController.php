<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }
    public function services()
    {
        return view('website.servics');
    }
    public function contact()
    {
        return view('website.contactus');
    }
    public function downloads()
    {
        return view('website.downloads');
    }
    public function career()
    {
        return view('website.career');
    }
    public function guide()
    {
        return view('website.guide');
    }
}
