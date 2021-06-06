<?php

namespace App\Http\Controllers\Backend\Gallary;

use App\Http\Controllers\Controller;
use App\Models\Gallery\Photo;
use App\Models\Gallery\Video;
use Illuminate\Http\Request;

class VideoContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        /*
        TODO: For Practice i use with the Eloquent
         $photo = DB::table('video')->orderBy('id','desc')->paginate(5); // Old Way of Doing
        */
        $video = Video::orderBy('id', 'DESC')->paginate('5');
        return view('backend.gallery.video.index')->with('video', $video);
    }


    public function create()
    {
        return view('backend.gallery.video.create');
    }


    public function store(Request $request)
    {
//        dd('hots');
        $data = array();
        $data['title'] = $request->title;
        $data['embed_code'] = $request->embed_code;
        $data['type'] = $request->type;
        Video::create($data);
        return redirect()->route('video.index');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        return view('backend.gallery.video.edit',compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['embed_code'] = $request->embed_code;
        $data['type'] = $request->type;
        Video::where('id',$id)->update($data);
        return redirect()->route('video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('video.index');
    }
}
