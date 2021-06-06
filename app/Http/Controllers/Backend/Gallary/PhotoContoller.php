<?php

namespace App\Http\Controllers\Backend\Gallary;

use App\Http\Controllers\Controller;
use App\Models\Gallery\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class PhotoContoller extends Controller
{

    public function index()
    {
        /*
        TODO: For Practice i use with the Eloquent
           $photo = DB::table('photos')->orderBy('id','desc')->paginate(5); // Old Way of Doing
        */
        $photo = Photo::orderBy('id', 'DESC')->paginate('5');
        return view('backend.gallery.photo')->with('photo', $photo);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.create');
    }


    public function store(Request $request)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['type'] = $request->type;
        $image = $request->photo;
        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension(); # take image like 123. with extention like png/jpeg
            Image::make($image)->resize(500, 300)->save('image/photo_gallery/' . $image_one);
            $data['photo'] = 'image/photo_gallery/' . $image_one;
            // public/image/postimg/3434.png
//            dd($data);
            Photo::create($data);
            return redirect()->route('photo.index');
        } else {
            return redirect()->back();
        }

        /*
 * Second method
        $data = array();
        $data['title'] = $request->title;
        $data['type'] = $request->type;
        $image = $request->photo;
        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension(); # take image like 123. with extention like png/jpeg
            Image::make($image)->resize(500, 300)->save('image/photo_gallery/' . $image_one);
            $data['photo'] = 'image/photo_gallery/' . $image_one;
            // public/image/postimg/3434.png
            dd($data);
            DB::table('photo')->insert($data);
            return redirect()->route('photo.index');
        } else {
            return redirect()->back();
        }*/

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit(Photo $photo)
    {

        return view('backend.gallery.edit',compact('photo'));
    }


    public function update(Request $request, $id)
    {
 ;
        $data = array();
        $data['title'] = $request->title;
        $data['type'] = $request->type;
        $image = $request->photo;
        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension(); # take image like 123. with extention like png/jpeg
            Image::make($image)->resize(500, 300)->save('image/photo_gallery/' . $image_one);
            $data['photo'] = 'image/photo_gallery/' . $image_one;
            // public/image/postimg/3434.png
//            dd($data);
            Photo::where('id',$id)->update($data);
            return redirect()->route('photo.index');
        } else {
            return redirect()->back();
        }
    }

    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect()->route('photo.index');
    }
}
