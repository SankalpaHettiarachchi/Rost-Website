<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $newsitems = News::all();
        return view('admin.news', compact('newsitems'));
    }

    public function index_site()
    { 
        $newsitems_top2 = News::all()->take(2);
        $newsitems_recent = News::all();
        return view('site.news', compact('newsitems_top2','newsitems_recent'));
    }
    public function news_click($id)
    { 
        $newsitems_top1 = News::find($id);
        $newsitems_recent = News::all();
        return view('site.news', compact('newsitems_top1','newsitems_recent'));
    }

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
