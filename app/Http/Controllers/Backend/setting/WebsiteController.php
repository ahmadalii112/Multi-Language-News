<?php

namespace App\Http\Controllers\Backend\setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    public function index()
    {
        $links = DB::table('website')->orderBy('id','DESC')->paginate(5);
        return view('backend.weblinks.index',compact('links'));
    }

    public function create()
    {

        return view('backend.weblinks.create');
    }
    public function store(Request $request)
    {
        ;

        //Todo: we Use Query Builder so We Can store data into the database like this
        $data = array();
        #  database table field name = form field name using Request
        $data['website_name']    =   $request->website_name;
        $data['website_link']  =   $request->website_link;
        DB::table('website')->insert($data);

        return redirect()->route('weblinks.index');

    }
    public function update(Request $request,$id)
    {
        //Todo: we Use Query Builder so We Can store data into the database like this
        $data = array();
        #  database table field name = form field name using Request
        $data['website_name']    =   $request->website_name;
        $data['website_link']  =   $request->website_link;
        DB::table('website')->where('id',$id)->update($data);

        return redirect()->route('weblinks.index');

    }


    public function delete($id)
    {
        DB::table('website')->where('id',$id)->delete();
        return redirect()->route('weblinks.index');
    }
}
