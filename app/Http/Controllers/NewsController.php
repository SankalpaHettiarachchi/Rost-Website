<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsitems = News::all();
        return view('admin.news', compact('newsitems'));
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
        $image = $request->file('cover');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('uploads'), $imageName);

        $newsItem = new News([
            'heading' => $request->input('heading'),
            'cover' => $imageName,
            'description' => $request->input('description'),
            'upload_date' => $request->input('upload_date'),
        ]);
        $newsItem->save();
        return redirect('/admin123/news');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $newsitem = News::find($id);
        $id = $newsitem->id;
        
        $newsitems = News::all();
        return view('admin.news', [
            'newsitem' => $newsitem,
            'newsitems' => $newsitems,
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


    public function update(Request $request, $id)
    {
        //
    }



    public function destroy($id)
    {

        $newsItem = News::find($id);

        if ($newsItem->cover_image) {
            unlink(public_path('uploads/' . $newsItem->cover_image));
        }

        $newsItem->delete();

        return redirect('/admin123/news');
    }
}
