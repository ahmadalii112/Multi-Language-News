<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{

    public function index()
    {
        $posts = DB::table('posts')
            ->join('categories', 'posts.category_id', 'categories.id')
            ->join('subcategories', 'posts.subcategory_id', 'subcategories.id')
            ->join('districts', 'posts.district_id', 'districts.id')
            ->join('subdistricts', 'posts.subdistrict_id', 'subdistricts.id')
            ->select('posts.*', 'categories.category_en', 'categories.category_urdu', 'subcategories.subcategory_en', 'subcategories.subcategory_urdu', 'districts.district_en', 'districts.district_urdu', 'subdistricts.subdistrict_en', 'subdistricts.subdistrict_urdu')
            ->orderBy('id', 'DESC')->paginate(10);
//        dd($posts);
        return view('backend.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $category = DB::table('categories')->get();
        $subcategory = DB::table('subcategories')->get();
        $district = DB::table('districts')->get();
        $subdistrict = DB::table('subdistricts')->get();

        return view('backend.posts.create', compact('category', 'subcategory', 'district', 'subdistrict'));

    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'category_id' => 'required',
            'district_id' => 'required',
        ]);

        $data = array();
        $data['title_en'] = $request->title_en;
        $data['title_urdu'] = $request->title_urdu;
        $data['user_id'] = Auth::id();
        $data['category_id'] = $request->category_id;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['district_id'] = $request->district_id;
        $data['subdistrict_id'] = $request->subdistrict_id;
        $data['details_en'] = $request->details_en;
        $data['details_urdu'] = $request->details_urdu;
        $data['tags_en'] = $request->tags_en;
        $data['tags_urdu'] = $request->tags_urdu;
        $data['headline'] = $request->headline;
        $data['first_section'] = $request->first_section;
        $data['first_section_thumbnail'] = $request->first_section_thumbnail;
        $data['bigthumbnail'] = $request->bigthumbnail;
        $data['post_date'] = date('d-m-y');
        $data['post_month'] = date('F');

        $image = $request->image;
        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension(); # take image like 123. with extention like png/jpeg
            Image::make($image)->resize(500, 300)->save('image/postimg/' . $image_one);
            $data['image'] = 'image/postimg/' . $image_one;
            // public/image/postimg/3434.png
            DB::table('posts')->insert($data);
            return redirect()->route('posts.index');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $posts = DB::table('posts')->where('id', $id)->first();
        $category = DB::table('categories')->get();
        $subcategory = DB::table('subcategories')->get();
        $district = DB::table('districts')->get();
        $subdistrict = DB::table('subdistricts')->get();
        return view('backend.posts.edit', compact('posts', 'category', 'subcategory', 'district', 'subdistrict'));
    }


    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'category_id' => 'required',
            'district_id' => 'required',
        ]);

        $data = array();
        $data['title_en'] = $request->title_en;
        $data['title_urdu'] = $request->title_urdu;
        $data['user_id'] = Auth::id();
        $data['category_id'] = $request->category_id;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['district_id'] = $request->district_id;
        $data['subdistrict_id'] = $request->subdistrict_id;
        $data['details_en'] = $request->details_en;
        $data['details_urdu'] = $request->details_urdu;
        $data['tags_en'] = $request->tags_en;
        $data['tags_urdu'] = $request->tags_urdu;
        $data['headline'] = $request->headline;
        $data['first_section'] = $request->first_section;
        $data['first_section_thumbnail'] = $request->first_section_thumbnail;
        $data['bigthumbnail'] = $request->bigthumbnail;
        $data['post_date'] = date('d-m-y');
        $data['post_month'] = date('F');

        $image = $request->image;
        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension(); # take image like 123. with extention like png/jpeg
            Image::make($image)->resize(500, 300)->save('image/postimg/' . $image_one);
            $data['image'] = 'image/postimg/' . $image_one;
            // public/image/postimg/3434.png
            DB::table('posts')->where('id', $id)->update($data);
            return redirect()->route('posts.index');
        } else {
            return redirect()->back();
        }

    }
    public function destroy($id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return redirect()->route('posts.index');
    }

    public function getsubcategory($category_id)
    {
        $sub = DB::table('subcategories')->where('category_id', $category_id)->get();
        return response()->json($sub);
    }

    public function getsubdistrict($district_id)
    {
        $sub = DB::table('subdistricts')->where('district_id', $district_id)->get();
        return response()->json($sub);
    }
}
