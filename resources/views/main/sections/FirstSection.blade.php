@php
    $FirstSectionBigThumbnail = \Illuminate\Support\Facades\DB::table('posts')->where('first_section_thumbnail',1)->orderBy('id','desc')->first();
@endphp

<section class="news-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 col-sm-8">
                <div class="row">
                    <div class="col-md-1 col-sm-1 col-lg-1"></div>
                    <div class="col-md-10 col-sm-10">
                        <div class="lead-news">
                            <div class="service-img"><a href="{{\Illuminate\Support\Facades\URL::to('view/post/'.$FirstSectionBigThumbnail->id)}}"><img
                                            src="{{asset($FirstSectionBigThumbnail->image)}}" width="800px"
                                            alt="Notebook"></a></div>
                            <div class="content">
                                <h4 class="lead-heading-01"><a href="{{\Illuminate\Support\Facades\URL::to('view/post/'.$FirstSectionBigThumbnail->id)}}">
                                        @if(session()->get('language')== 'urdu')
                                            {{ $FirstSectionBigThumbnail->title_urdu}}
                                        @else
                                            {{$FirstSectionBigThumbnail->title_en}}
                                        @endif
                                    </a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!--First Section Data -->
                @php
                    $FirstSectionData = \Illuminate\Support\Facades\DB::table('posts')->where('first_section',1)->orderBy('id','desc')->limit(8)->get();
                @endphp
                <div class="row">
                    @foreach($FirstSectionData as $row)
                        <div class="col-md-3 col-sm-3">
                            <div class="top-news">
                                <a href="{{\Illuminate\Support\Facades\URL::to('view/post/'.$row->id)}}"><img src="{{asset($row->image)}}" alt="Notebook"></a>
                                <h4 class="heading-02"><a href="{{\Illuminate\Support\Facades\URL::to('view/post/'.$row->id)}}">
                                        @if(session()->get('language')== 'urdu')
                                            {{ $row->title_urdu}}
                                        @else
                                            {{$row->title_en}}
                                        @endif
                                    </a></h4>
                            </div>
                        </div>
                    @endforeach

                </div>

                <!-- add-start -->
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="add"><img src="{{asset('frontend/assets/img/top-ad.jpg')}}" alt=""/></div>
                    </div>
                </div><!-- /.add-close -->


                <!-- news-start -->
                <div class="row">

                    @php
                        $firstCategory = \Illuminate\Support\Facades\DB::table('categories')->first();
                        $firstCategoryPostBigT = DB::table('posts')->where('category_id',$firstCategory->id)->where('bigthumbnail',1)->first() ;
                        $firstCategoryPostsmall = DB::table('posts')->where('category_id',$firstCategory->id)->where('bigthumbnail',null)->limit(3)->get() ;


                    @endphp
                    <div class="col-md-6 col-sm-6">
                        <div class="bg-one">
                            <div class="cetagory-title"><a href="#">
                                    @if(session()->get('language')== 'urdu')
                                        {{ $firstCategory->category_urdu}}
                                    @else
                                        {{$firstCategory->category_en}}
                                    @endif <span>
                                                 @if(session()->get('language')== 'urdu')
                                            مزید
                                        @else
                                            More
                                        @endif<i
                                                class="fa fa-angle-double-right" aria-hidden="true"></i></span></a>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="top-news">
                                        <a href="{{route('single.post',$firstCategoryPostBigT->id)}}"><img src="{{asset($firstCategoryPostBigT->image)}}"
                                                                                                           alt="Notebook"></a>
                                        <h4 class="heading-02"><a href="{{route('single.post',$firstCategoryPostBigT->id)}}">
                                                @if(session()->get('language')== 'urdu')
                                                    {{ $firstCategoryPostBigT->title_urdu}}
                                                @else
                                                    {{$firstCategoryPostBigT->title_en}}
                                                @endif </a></h4>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    @foreach($firstCategoryPostsmall as $row)
                                        <div class="image-title">
                                            <a href="{{route('single.post',$row->id)}}"><img src="{{asset($row->image)}}"
                                                                                             alt="Notebook"></a>
                                            <h4 class="heading-03"><a
                                                        href="#">@if(session()->get('language')== 'urdu')
                                                        {{ $row->title_urdu}}
                                                    @else
                                                        {{$row->title_en}}
                                                    @endif</a></h4>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>


                    @php
                        $secondCategory = \Illuminate\Support\Facades\DB::table('categories')->skip(1)->first();
                        $secondCategoryPostBigT = DB::table('posts')->where('category_id',$secondCategory->id)->where('bigthumbnail',1)->first();
                        $secondCategoryPostsmall = DB::table('posts')->where('category_id',$secondCategory->id)->where('bigthumbnail',null)->limit(3)->get() ;
                    @endphp


                    <div class="col-md-6 col-sm-6">
                        <div class="bg-one">
                            <div class="cetagory-title"><a href="#">
                                    @if(session()->get('language')== 'urdu')
                                        {{ $secondCategory->category_urdu}}
                                    @else
                                        {{$secondCategory->category_en}}
                                    @endif <span>
                                                 @if(session()->get('language')== 'urdu')
                                            مزید
                                        @else
                                            More
                                        @endif<i
                                                class="fa fa-angle-double-right" aria-hidden="true"></i></span></a>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="top-news">
                                        <a href="{{route('single.post',$secondCategoryPostBigT->id)}}"><img src="{{asset($secondCategoryPostBigT->image)}}"
                                                                                                            alt="Notebook"></a>
                                        <h4 class="heading-02"><a href="{{route('single.post',$secondCategoryPostBigT->id)}}">
                                                @if(session()->get('language')== 'urdu')
                                                    {{ $secondCategoryPostBigT->title_urdu}}
                                                @else
                                                    {{$secondCategoryPostBigT->title_en}}
                                                @endif </a></h4>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    @foreach($secondCategoryPostsmall as $row)
                                        <div class="image-title">
                                            <a href="#"><img src="{{asset($row->image)}}"
                                                             alt="Notebook"></a>
                                            <h4 class="heading-03"><a
                                                        href="{{route('single.post',$row->id)}}">@if(session()->get('language')== 'urdu')
                                                        {{ $row->title_urdu}}
                                                    @else
                                                        {{$row->title_en}}
                                                    @endif</a></h4>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-3">
                <!-- add-start -->
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="sidebar-add"><img src="assets/img/add_01.jpg" alt=""/></div>
                    </div>
                </div><!-- /.add-close -->

                <!-- youtube-live-start -->
                @php
                    $tv=\Illuminate\Support\Facades\DB::table('livetv')->first()
                @endphp
                @if($tv->status == 1)
                    <div class="cetagory-title-03">Live TV</div>
                    <div class="photo">
                        <div class="embed-responsive embed-responsive-16by9 embed-responsive-item"
                             style="margin-bottom:5px;">
                            {!! $tv->embed_code !!}
                        </div>
                    </div><!-- /.youtube-live-close -->
            @endif


            <!-- facebook-page-start -->
                <div class="cetagory-title-03">Facebook</div>
                <div class="fb-root">
                    facebook page here
                </div><!-- /.facebook-page-close -->

                <!-- add-start -->
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="sidebar-add">
                            <img src="assets/img/add_01.jpg" alt=""/>
                        </div>
                    </div>
                </div><!-- /.add-close -->
            </div>
        </div>
    </div>
</section><!-- /.1st-news-section-close -->