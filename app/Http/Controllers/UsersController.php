<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\User;
use App\Events\Admin_accept;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Students::all();
        $admins = User::all();
        return view('admin.users', compact('students'))->with('admins',$admins);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $student = Students::find($id);

        $student->delete();

        return redirect('/admin123/users');
    }
    public function admin_destroy($id)
    {
        $User = User::find($id);

        $User->delete();

        return redirect('/admin123/users');
    }
    public function admin_make($id)
    {
        
        $User = User::find($id);

        if ($User) 
        {
            $User->update 
            ([
                'role' => '1',
            ]);
        }
        event(new Admin_accept($User));
        return redirect('/admin123/users');
    }
}
