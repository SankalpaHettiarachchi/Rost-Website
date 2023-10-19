<?php

namespace App\Http\Controllers;
use App\Models\Albums;
use App\Models\Image;
use App\Models\News;
use App\Models\User;
use App\Models\Students;
use App\Models\Messages;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news_count = News::count();
        $admins_count = User::count(); 
        $albums_count = Albums::count();
        $students_count = Students::count();
        $admins_pending_Count = User::where('role', 0)->count();
        $messages_count = Messages::count();
        $unread_messages_count = Messages::where('is_read', false)->count();



        // dd($news_count,$admins_count,$albums_count,$students_count);

        return view('admin.dashboard', [
            'news_count' => $news_count,
            'admins_count' => $admins_count,
            'albums_count' => $albums_count,
            'students_count' => $students_count,
            'admins_pending_Count' => $admins_pending_Count,
            'messages_count' => $messages_count,
            'unread_messages_count' => $unread_messages_count,
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
