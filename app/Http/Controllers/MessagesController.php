<?php

namespace App\Http\Controllers;
use App\Models\Messages;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messageitems = Messages::all();
        return view('admin.messages', compact('messageitems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);
        $messageItem = new Messages([
            'full_name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);
        $messageItem->save();
        Session::flash('success', 'Thank you! Your message has been sent.');
        return redirect('/contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $messageitem = Messages::find($id);
        $id = $messageitem->id;
        
        $messageitem->update
        ([
            'is_read'=>True,
        ]);
        
        $messageitems = Messages::all();
        return view('admin.messages', [
            'messageitem' => $messageitem,
            'messageitems' => $messageitems,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Messageitem = Messages::find($id);
        $Messageitem->delete();
        return redirect('/admin123/messages');
    }
    
}
