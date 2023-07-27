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
            $request->validate([
                'heading' => 'required|string|max:100',
                'description' => 'required|string|min:200|max:400',
                'upload_date' => 'required|date',
                'cover' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'fb_link' => 'nullable|url',
                'in_link' => 'nullable|url',
            ]);

            if ($request)
            {
                if ($request->hasFile('cover')) {
                    $image = $request->file('cover');
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $image->move(public_path('uploads'), $imageName);
        
                    list($width, $height) = getimagesize(public_path('uploads/' . $imageName));
        
                    if ($width !== 1075 || $height !== 716) {
        
                        return back()->withInput()->withErrors('The cover image should be exactly 1075px x 716px .');
                    }
                }
        
                $heading = $request->input('heading');
                $description = $request->input('description');
        
                $newsItem = new News([
                    'heading' => $heading,
                    'cover' => $imageName,
                    'description' => $description,
                    'upload_date' => $request->input('upload_date'),
                    'fb_link' => $request->input('fb_link'),
                    'in_link' => $request->input('in_link'),
                ]);
                $newsItem->save();
                return redirect('/admin123/news');
    
            }
            else
            {
                return redirect('/admin123/news');
            }
    }

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

    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $image = $request->file('cover');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('uploads'), $imageName);

        $news->update
        ([
            'heading' => $request->input('heading'),
            'cover' => $imageName,
            'description' => $request->input('description'),
            'upload_date' => $request->input('upload_date'),
            'fb_link' => $request->input('fb_link'),
            'in_link' => $request->input('in_link'),
        ]);

        return redirect('/admin123/news');
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
