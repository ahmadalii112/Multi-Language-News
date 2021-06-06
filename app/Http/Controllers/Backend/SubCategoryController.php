<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    public function index()
    {
        // Todo: Use Query Builder
        // Todo: JOIN
        $subcategory = DB::table('subcategories')
            ->join('categories','subcategories.category_id','categories.id')
            ->select('subcategories.*','categories.category_en','categories.category_urdu')
            ->orderBy('id', 'desc')->paginate(5);
        return view('backend.sub_categories.index',compact('subcategory'));

    }

    public function create()
    {
        $category = DB::table('categories')->get();
        return view('backend.sub_categories.create',compact('category'));
    }

    public function store(Request $request)
    {
        # Validations
        $validateData = $request->validate([
            'subcategory_en' =>'required|unique:subcategories|max:255',
            'subcategory_urdu' =>'required|unique:subcategories|max:255',
        ]);

        //Todo: we Use Query Builder so We Can store data into the database like this
        $data = array();
        #  database table field name = form field name using Request
        $data['subcategory_en']    =   $request->subcategory_en;
        $data['subcategory_urdu']  =   $request->subcategory_urdu;
        $data['category_id']  =   $request->category_id;
        DB::table('subcategories')->insert($data);
        return redirect()->route('sub_categories.index');

    }

    public function edit($id)
    {
        $subcategory = DB::table('subcategories')->where('id',$id)->first();
        $category = DB::table('categories')->get();

        return view('backend.sub_categories.edit',compact('subcategory','category'));
    }

    public function update(Request $request, $id)
    {
        //Todo: we Use Query Builder so We Can store data into the database like this
        $data = array();
        #  database table field name = form field name using Request
        $data['subcategory_en']    =   $request->subcategory_en;
        $data['subcategory_urdu']  =   $request->subcategory_urdu;
        $data['category_id']  =   $request->category_id;
        DB::table('subcategories')->where('id',$id)->update($data);
        return redirect()->route('sub_categories.index');

    }

    public function DeleteSubCategory($id)
    {
//        dd('hits');
        DB::table('subcategories')->where('id',$id)->delete();
        return $this->index();
    }
}
