<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
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

    public function index() {
        return view('pages.index');
    }

    public function seo() {
        return view('pages.seo');
    }

    public function branding() {
        return view('pages.branding');
    }

    public function development() {
        return view('pages.development');
    }
}
