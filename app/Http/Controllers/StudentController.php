<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentController extends Controller
{

    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'f_name' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'l_name' => 'required|string',
            'contact_no' => 'required|string|max:12',
        ]);

        if ($request)
            {
                $f_name = $request->input('f_name');
                $l_name = $request->input('l_name');
                $email = $request->input('email');
                $contact_no = $request->input('contact_no');
        
                $student = new Students([
                    'f_name' => $f_name,
                    'l_name' => $l_name,
                    'email' => $email,
                    'contact_no' => $contact_no,
                ]);
                $student->save();
                return back()->withInput();
    
            }
            else
            {
                return back()->withInput()->withErrors('Error');
            }
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
        //
    }
}
