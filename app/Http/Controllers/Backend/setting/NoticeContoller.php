<?php

namespace App\Http\Controllers\Backend\setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoticeContoller extends Controller
{
    public function index()
    {
        $notice = DB::table('notice')->first();
        return view('backend.notice.index', compact('notice'));
    }

    public function update(Request $request, $id)
    {
//Todo: we Use Query Builder so We Can store data into the database like this
        $data = array();
        #  database table field name = form field name using Request
        $data['notice'] = $request->notice;

        DB::table('notice')->where('id', $id)->update($data);

        return redirect()->route('notice.setting');
    }

    public function activate($id)
    {
        DB::table('notice')->where('id', $id)->update(['status' => 1]);

        return redirect()->route('notice.setting');
    }

    public function De_active($id)
    {
        DB::table('notice')->where('id', $id)->update(['status' => 0]);

        return redirect()->route('notice.setting');
    }


}
