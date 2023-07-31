<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


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

    public function index()
    {
        Session::flush();
        return view('admin.dashboard');
    }
    public function logout(Request $request)
    {
        Session::flush();
        return redirect('/admin123/dashboard');
    }


}
