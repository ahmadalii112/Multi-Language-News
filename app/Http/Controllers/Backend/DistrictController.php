<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DistrictController extends Controller
{
    public function index()
    {
        // Todo: Use Query Builder
        $district = DB::table('districts')->orderBy('id','desc')->paginate(5);
        return view('backend.district.index',compact('district'));
    }
    public function create()
    {
        return view('backend.district.create');
    }
    public function store(Request $request)
    {
        # Validations
        $validateData = $request->validate([
            'district_en' =>'required|unique:districts|max:255',
            'district_urdu' =>'required|unique:districts|max:255',
        ]);

        //Todo: we Use Query Builder so We Can store data into the database like this
        $data = array();
        #  database table field name = form field name using Request
        $data['district_en']    =   $request->district_en;
        $data['district_urdu']  =   $request->district_urdu;
        DB::table('districts')->insert($data);
        $notification = array(
            'message'=>'Districts Inserted Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('district.index')->with($notification);

    }
    public function edit($id)
    {
        $district= DB::table('districts')->where('id',$id)->first();
//        dd($category->category_en);
        return view('backend.district.edit',compact('district'));

    }

    public function update(Request $request,$id)
    {

        //Todo: we Use Query Builder so We Can store data into the database like this
        $data = array();
        #  database table field name = form field name using Request
        $data['district_en']    =   $request->district_en;
        $data['district_urdu']  =   $request->district_urdu;
        DB::table('districts')->where('id',$id)->update($data);
        $notification = array(
            'message'=>'district Updated Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('district.index')->with($notification);
    }
    public function destroy($id)
    {
        DB::table('districts')->where('id',$id)->delete();
        return $this->index();
    }
}
