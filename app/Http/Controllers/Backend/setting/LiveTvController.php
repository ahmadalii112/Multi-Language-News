<?php

namespace App\Http\Controllers\Backend\setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LiveTvController extends Controller
{
    public function index()
    {
        $liveTv = DB::table('livetv')->first();
        return view('backend.livetv.index', compact('liveTv'));
    }

    public function update(Request $request, $id)
    {
        //Todo: we Use Query Builder so We Can store data into the database like this
        $data = array();
        #  database table field name = form field name using Request
        $data['embed_code'] = $request->embed_code;

        DB::table('livetv')->where('id', $id)->update($data);

        return redirect()->route('liveTV_setting');
    }

    public function activate(Request $request,$id)
    {
        DB::table('livetv')->where('id', $id)->update(['status'=>1]);

        return redirect()->route('liveTV_setting');
    }

    public function De_active(Request $request,$id)
    {
        DB::table('livetv')->where('id', $id)->update(['status'=>0]);

        return redirect()->route('liveTV_setting');
    }


}
