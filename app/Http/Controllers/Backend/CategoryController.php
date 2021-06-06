<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        // Todo: Use Query Builder
        $category = DB::table('categories')->orderBy('id','desc')->paginate(5);
        return view('backend.category.index',compact('category'));
    }
    public function create()
    {

        return view('backend.category.create');
    }


    public function store(Request $request)
    {
        # Validations
        $validateData = $request->validate([
           'category_en' =>'required|unique:categories|max:255',
           'category_urdu' =>'required|unique:categories|max:255',
        ]);

        //Todo: we Use Query Builder so We Can store data into the database like this
        $data = array();
        #  database table field name = form field name using Request
        $data['category_en']    =   $request->category_en;
        $data['category_urdu']  =   $request->category_urdu;
        DB::table('categories')->insert($data);
        $notification = array(
            'message'=>'Categories Inserted Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('categories.index')->with($notification);

    }

    public function edit($id)
    {
        $category = DB::table('categories')->where('id',$id)->first();
//        dd($category->category_en);
        return view('backend.category.edit',compact('category'));

    }

    public function update(Request $request,$id)
    {


        //Todo: we Use Query Builder so We Can store data into the database like this
        $data = array();
        #  database table field name = form field name using Request
        $data['category_en']    =   $request->category_en;
        $data['category_urdu']  =   $request->category_urdu;
        DB::table('categories')->where('id',$id)->update($data);
        $notification = array(
            'message'=>'Categories Updated Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('categories.index')->with($notification);
    }

    public function destroy($id)
    {
        DB::table('categories')->where('id',$id)->delete();
        return $this->index();
    }
}
