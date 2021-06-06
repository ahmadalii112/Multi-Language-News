<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ExtraController extends Controller
{
    public function LanguageUrdu()
    {
        Session::get('language'); # get which we store in header.blade
        Session()->forget('language'); # our id language will be forget
        Session()->put('language','urdu');
        return redirect()->back();
    }

    public function LanguageEnglish()
    {

        Session::get('language'); # get which we store in header.blade
        Session()->forget('language'); # our id language will be forget
        Session()->put('language','english');
        return redirect()->back();
    }

    public function singlePost($id)
    {
        $post = DB::table('posts')
            ->join('categories','posts.category_id','=','categories.id')
            ->join('subcategories','posts.subcategory_id','=','subcategories.id')
            ->join('users','posts.user_id','=','users.id')
            ->select('posts.*','category_en','category_urdu','subcategory_en','subcategory_urdu','users.name')
            ->where('posts.id',$id)
            ->first();
        return view('main.singlePost',compact('post'));




    }

    public function categoryPost($id,$name)
    {
        $categoryPosts = DB::table('posts')->where('category_id',$id)->orderBy('id','desc')->paginate('5');
        return view('main.Pages.allPosts',compact('categoryPosts'));

    }
    public function subcategoryPost($id,$name)
    {
        $subcategoryPosts = DB::table('posts')->where('subcategory_id',$id)->orderBy('id','desc')->paginate('5');
        return view('main.Pages.allSubcategoryPosts',compact('subcategoryPosts'));

    }

    public function getDistrict($district_id)
    {
//        dd("hits");
        $sub = DB::table('subdistricts')->where('district_id', $district_id)->get();
        return response()->json($sub);

    }
    public function searchDistrict(Request $request)
    {
        $districtID = $request->district_id;
        $subdistrictID = $request->subdistrict_id;
        $categoryPosts = DB::table('posts')
            ->where('district_id',$districtID)
            ->where('subdistrict_id',$subdistrictID)
            ->orderBy('id','desc')->paginate('5');
        return view('main.Pages.allPosts',compact('categoryPosts'));


    }

}
