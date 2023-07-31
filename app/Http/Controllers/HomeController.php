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
        $this->middleware(['auth','backprevent']);
    }

    public function index()
    {
        Auth::login();
        Session::flush();
        return view('admin.dashboard');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        Session::flush();
        return redirect('/admin123/dashboard');
    }

}
