<?php

namespace App\Http\Controllers\Backend\setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Prayers extends Controller
{
    public function index()
    {
        $prayer = DB::table('prayers')->first();
        return view('backend.prayer.index',compact('prayer'));
    }

    public function update(Request $request,$id)
    {
        //Todo: we Use Query Builder so We Can store data into the database like this
        $data = array();
        #  database table field name = form field name using Request
        $data['fajar']    =   $request->fajar;
        $data['zohar']  =   $request->zohar;
        $data['asar']  =   $request->asar;
        $data['maghrib']  =   $request->maghrib;
        $data['isha']  =   $request->isha;

        DB::table('prayers')->where('id',$id)->update($data);

        return redirect()->route('prayer_setting');

    }
}
