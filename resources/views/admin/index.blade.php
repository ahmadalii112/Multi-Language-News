@extends('admin.admin_master')
@section('admin')

        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                    <div class="card-body py-0 px-0 px-sm-3">
                        <div class="row align-items-center">
                            <div class="col-4 col-sm-3 col-xl-2">
                                <img src="{{asset('backend/assets/images/dashboard/Group126@2x.png')}}"
                                     class="gradient-corona-img img-fluid" alt="">
                            </div>
                            <div class="col-5 col-sm-7 col-xl-8 p-0">
                                <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                                <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version
                                    with 5 unique layouts!</p>
                            </div>
                            <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank"
                             class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @php
        use Illuminate\Support\Facades\DB;
                $category = DB::table('categories')->get();
                $subcategory = DB::table('subcategories')->get();
                $posts = DB::table('posts')->get();
                $photos = DB::table('photos')->get();
                $video = DB::table('videos')->get();
                @endphp
        <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{count($category)}}</h3>
                                    <p class="text-success ml-2 mb-0 font-weight-medium">Categories</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                    <a href="{{route('categories.index')}}"><span class="mdi mdi-arrow-top-right icon-item"></span></a>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Category</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{count($subcategory)}}</h3>
                                    <p class="text-success ml-2 mb-0 font-weight-medium">Sub-Categories</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success">
                                    <a href="{{route('sub_categories.index')}}"><span class="mdi mdi-arrow-top-right icon-item"></span></a>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Sub-Category</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{count($posts)}}</h3>
                                    <p class="text-success ml-2 mb-0 font-weight-medium">Posts</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success">
                                    <a href="{{route('posts.index')}}"><span class="mdi mdi-arrow-top-right icon-item"></span></a>

                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Post</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{count($photos)}}</h3>
                                    <p class="text-success ml-2 mb-0 font-weight-medium">Photo</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{count($video)}}</h3>
                                    <p class="text-success ml-2 mb-0 font-weight-medium">Video</p>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="icon icon-box-success">
                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                </div>
                            </div>
                        </div>

                        <h6 class="text-muted font-weight-normal">Gallery</h6>
                    </div>
                </div>
            </div>
        </div>


@endsection