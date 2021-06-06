<?php

namespace App\Http\Controllers\Backend\setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SocialController extends Controller
{
    public function index()
    {
        $social = DB::table('socials')->first();
        return view('backend.social.index',compact('social'));
    }


    public function update(Request $request,$id)
    {
//        dd('hits');
        //Todo: we Use Query Builder so We Can store data into the database like this
        $data = array();
        #  database table field name = form field name using Request
        $data['facebook']    =   $request->facebook;
        $data['instagram']  =   $request->instagram;
        $data['twitter']  =   $request->twitter;
        $data['linkedin']  =   $request->linkedin;
        $data['youtube']  =   $request->youtube;
        DB::table('socials')->where('id',$id)->update($data);

        return redirect()->route('social_setting');
    }


}
