<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Albums;
use App\Models\Image;


class AlbumController extends Controller
{
    public function index()
    {
        $albums = Albums::all();
        return view('admin.albums')->with('albums', $albums);
    }

    public function store(Request $request)
    {
        $albumName = $request->input('al_name');
        $date = $request->input('al_date');
        $description = $request->input('al_description');

        $album = new Albums();
        $album->album_name = $albumName;
        $album->description = $description;
        $album->upload_date = $date;
        $album->image_count = count($request->file('ad_iamges'));
        $album->save();

        $this_album_id= $album->id;
        $imgcount = 0;
        foreach ($request->file('ad_iamges') as $image) {
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);

            Image::create([
                'image_name' => $imageName,
                'album_id' =>$this_album_id,
            ]);
        }


        return redirect('/admin123/albums');
    }
    public function show($id)
    {
        $album = Albums::find($id);
        $id = $album->id;
        
        $albums = Albums::all();
        return view('admin.albums', [
            'album' => $album,
            'albums' => $albums,
        ]);        
    }

    public function update(Request $request, $id)
    {
        $album = Albums::find($id);
        Image::where('album_id', $id)->delete();

        $albumName = $request->input('al_name');
        $date = $request->input('al_date');
        $description = $request->input('al_description');

        $album->update
        ([
            'album_name' => $albumName,
            'description' => $description,
            'upload_date' => $date,
        ]);
        foreach ($request->file('ad_iamges') as $image) {
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);

            Image::create([
                'image_name' => $imageName,
                'album_id' =>$id,
            ]);
        }

        return redirect('/admin123/albums');
    }

    public function destroy($id)
    {
        Albums::destroy($id);
        $images = Image::where('album_id', $id)->get();
        image::destroy($images);


        return redirect('/admin123/albums');
    }
}
    // public function store(Request $request)
    // {
    //     // Validate the uploaded image(s) and other input fields
    //     $request->validate([
    //         'images' => 'required|array', // Make sure images field is an array
    //         'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image files
    //     ]);

    //     // Handle image uploads and saving to the database
    //     foreach ($request->file('images') as $image) {
    //         $imageName = $image->getClientOriginalName();
    //         $image->move(public_path('uploads'), $imageName);

    //         Image::create([
    //             'image_name' => $imageName,
    //             'description' => $request->input('description'),
    //             'album_id' => $request->input('album_id'), // If images are associated with albums
    //         ]);
    //     }

    //     return redirect()->back()->with('success', 'Images uploaded successfully.');
    // }