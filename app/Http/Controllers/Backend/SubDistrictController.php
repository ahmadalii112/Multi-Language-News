<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubDistrictController extends Controller
{
    public function index()
    {
        // Todo: Use Query Builder
        // Todo: JOIN
        $subdistricts = DB::table('subdistricts')
            ->join('districts','subdistricts.district_id','districts.id')
            ->select('subdistricts.*','districts.district_en','districts.district_urdu')
            ->orderBy('id', 'desc')->paginate(5);
        return view('backend.sub_district.index',compact('subdistricts'));

    }

    public function create()
    {
        $districts= DB::table('districts')->get();
        return view('backend.sub_district.create',compact('districts'));
    }

    public function store(Request $request)
    {
        # Validations
        $validateData = $request->validate([
            'subdistrict_en' =>'required|unique:subdistricts|max:255',
            'subdistrict_urdu' =>'required|unique:subdistricts|max:255',
        ]);

        //Todo: we Use Query Builder so We Can store data into the database like this
        $data = array();
        #  database table field name = form field name using Request
        $data['subdistrict_en']    =   $request->subdistrict_en;
        $data['subdistrict_urdu']  =   $request->subdistrict_urdu;
        $data['district_id']  =   $request->district_id;
        DB::table('subdistricts')->insert($data);
        return redirect()->route('sub_district.index');

    }

    public function edit($id)
    {
        $subdistricts = DB::table('subdistricts')->where('id',$id)->first();
        $districts = DB::table('districts')->get();

        return view('backend.sub_district.edit',compact('subdistricts','districts'));
    }

    public function update(Request $request, $id)
    {
        //Todo: we Use Query Builder so We Can store data into the database like this
        $data = array();
        #  database table field name = form field name using Request
        $data['subdistrict_en']    =   $request->subdistrict_en;
        $data['subdistrict_urdu']  =   $request->subdistrict_urdu;
        $data['district_id']  =   $request->district_id;
        DB::table('subdistricts')->where('id',$id)->update($data);
        return redirect()->route('sub_district.index');

    }

    public function DeleteSubDistrict($id)
    {
//        dd('hits');
        DB::table('subdistricts')->where('id',$id)->delete();
        return $this->index();
    }
}

