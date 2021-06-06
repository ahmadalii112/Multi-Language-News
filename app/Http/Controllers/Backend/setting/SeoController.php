<?php

namespace App\Http\Controllers\Backend\setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeoController extends Controller
{
    public function index()
    {
        $seo = DB::table('seos')->first();
        return view('backend.seo.index',compact('seo'));
    }

    public function update(Request $request,$id)
    {
        //Todo: we Use Query Builder so We Can store data into the database like this
        $data = array();
        #  database table field name = form field name using Request
        $data['meta_author']    =   $request->meta_author;
        $data['meta_title']  =   $request->meta_title;
        $data['meta_keyword']  =   $request->meta_keyword;
        $data['meta_description']  =   $request->meta_description;
        $data['google_analytics']  =   $request->google_analytics;
        $data['google_verification']  =   $request->google_verification;
        $data['alexa_analytics']  =   $request->alexa_analytics;
        DB::table('seos')->where('id',$id)->update($data);

        return redirect()->route('seo_setting');

    }
}
