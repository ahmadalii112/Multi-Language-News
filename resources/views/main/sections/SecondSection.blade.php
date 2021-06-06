<section class="news-section">
    <div class="container-fluid">
        <div class="row">

            @php
                $thirdCategory = \Illuminate\Support\Facades\DB::table('categories')->skip(2)->first();
                $thirdCategoryPostBigT = DB::table('posts')->where('category_id',$thirdCategory->id)->where('bigthumbnail',1)->first() ;
                $thirdCategoryPostsmall = DB::table('posts')->where('category_id',$thirdCategory->id)->where('bigthumbnail',null)->limit(3)->get() ;
            @endphp


            <div class="col-md-6 col-sm-6">
                <div class="bg-one">
                    <div class="cetagory-title-02"><a href="#">
                            @if(session()->get('language')== 'urdu')
                                {{ $thirdCategory->category_urdu}}
                            @else
                                {{$thirdCategory->category_en}}
                            @endif
                            <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i
                                        class="fa fa-plus" aria-hidden="true"></i>
                                       @if(session()->get('language')== 'urdu')
                                    تمام خبریں
                                @else
                                    All News
                                @endif </span></a></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="top-news">
                                <a href="{{route('single.post',$thirdCategoryPostBigT->id)}}"><img src="{{asset($thirdCategoryPostBigT->image)}}" alt="Notebook"></a>
                                <h4 class="heading-02"><a href="{{route('single.post',$thirdCategoryPostBigT->id)}}">
                                        @if(session()->get('language')== 'urdu')
                                            {{ $thirdCategoryPostBigT->title_urdu}}
                                        @else
                                            {{$thirdCategoryPostBigT->title_en}}
                                        @endif</a>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            @foreach($thirdCategoryPostsmall as $row)
                                <div class="image-title">
                                    <a href="#"><img src="{{asset($row->image)}}" alt="Notebook"></a>
                                    <h4 class="heading-03"><a href="{{route('single.post',$row->id)}}">
                                            @if(session()->get('language')== 'urdu')
                                                {{ $row->title_urdu}}
                                            @else
                                                {{$row->title_en}}
                                            @endif</a>
                                    </h4>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>


            @php
                $fourthCategory = \Illuminate\Support\Facades\DB::table('categories')->skip(3)->first();
                $fourthCategoryPostBigT = DB::table('posts')->where('category_id',$fourthCategory->id)->where('bigthumbnail',1)->first() ;
                $fourthCategoryPostsmall = DB::table('posts')->where('category_id',$fourthCategory->id)->where('bigthumbnail',null)->limit(3)->get() ;
            @endphp


            <div class="col-md-6 col-sm-6">
                <div class="bg-one">
                    <div class="cetagory-title-02"><a href="#">
                            @if(session()->get('language')== 'urdu')
                                {{ $fourthCategory->category_urdu}}
                            @else
                                {{$fourthCategory->category_en}}
                            @endif
                            <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i
                                        class="fa fa-plus" aria-hidden="true"></i>
                                       @if(session()->get('language')== 'urdu')
                                    تمام خبریں
                                @else
                                    All News
                                @endif </span></a></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="top-news">
                                <a href="{{route('single.post',$fourthCategoryPostBigT->id)}}"><img src="{{asset($fourthCategoryPostBigT->image)}}" alt="Notebook"></a>
                                <h4 class="heading-02"><a href="{{route('single.post',$fourthCategoryPostBigT->id)}}">
                                        @if(session()->get('language')== 'urdu')
                                            {{ $fourthCategoryPostBigT->title_urdu}}
                                        @else
                                            {{$fourthCategoryPostBigT->title_en}}
                                        @endif</a>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            @foreach($fourthCategoryPostsmall as $row)
                                <div class="image-title">
                                    <a href="#"><img src="{{asset($row->image)}}" alt="Notebook"></a>
                                    <h4 class="heading-03"><a href="{{route('single.post',$row->id)}}">
                                            @if(session()->get('language')== 'urdu')
                                                {{ $row->title_urdu}}
                                            @else
                                                {{$row->title_en}}
                                            @endif</a>
                                    </h4>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ******* -->
        <div class="row">
            @php
                $fifithCategory = \Illuminate\Support\Facades\DB::table('categories')->skip(4)->first();
                $fifthCategoryPostBogT = DB::table('posts')->where('category_id',$fifithCategory->id)->where('bigthumbnail',1)->first() ;
                $fifthCategoryPostsmall = DB::table('posts')->where('category_id',$fifithCategory->id)->where('bigthumbnail',null)->limit(3)->get() ;
            @endphp

            <div class="col-md-6 col-sm-6">
                <div class="bg-one">
                    <div class="cetagory-title-02"><a href="#">
                            @if(session()->get('language')== 'urdu')
                                {{ $fifithCategory->category_urdu}}
                            @else
                                {{$fifithCategory->category_en}}
                            @endif
                            <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i
                                        class="fa fa-plus" aria-hidden="true"></i>
                                       @if(session()->get('language')== 'urdu')
                                    تمام خبریں
                                @else
                                    All News
                                @endif </span></a></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="top-news">
                                <a href="{{route('single.post',$fifthCategoryPostBogT->id)}}"><img src="{{asset($fifthCategoryPostBogT->image)}}" alt="Notebook"></a>
                                <h4 class="heading-02"><a href="{{route('single.post',$fifthCategoryPostBogT->id)}}">
                                        @if(session()->get('language')== 'urdu')
                                            {{ $fifthCategoryPostBogT->title_urdu}}
                                        @else
                                            {{$fifthCategoryPostBogT->title_en}}
                                        @endif</a>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            @foreach($fifthCategoryPostsmall as $row)
                                <div class="image-title">
                                    <a href="#"><img src="{{asset($row->image)}}" alt="Notebook"></a>
                                    <h4 class="heading-03"><a href="{{route('single.post',$row->id)}}">
                                            @if(session()->get('language')== 'urdu')
                                                {{ $row->title_urdu}}
                                            @else
                                                {{$row->title_en}}
                                            @endif</a>
                                    </h4>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="bg-one">
                    <div class="cetagory-title-02"><a href="#">Science and Technology <i class="fa fa-angle-right"
                                                                            aria-hidden="true"></i> <span><i
                                        class="fa fa-plus" aria-hidden="true"></i>
                                @if(session()->get('language')== 'urdu')
                                    تمام خبریں
                                @else
                                    All News
                                @endif  </span></a></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="top-news">
                                <a href="#"><img src="{{asset('frontend/assets/img/news.jpg')}}" alt="Notebook"></a>
                                <h4 class="heading-02"><a href="#">Students won't get form fill-up fee back</a></h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="image-title">
                                <a href="#"><img src="{{asset('frontend/assets/img/news.jpg')}}" alt="Notebook"></a>
                                <h4 class="heading-03"><a href="#">Students won't get form fill-up fee back</a></h4>
                            </div>
                            <div class="image-title">
                                <a href="#"><img src="{{asset('frontend/assets/img/news.jpg')}}" alt="Notebook"></a>
                                <h4 class="heading-03"><a href="#">Students won't get form fill-up fee back</a></h4>
                            </div>
                            <div class="image-title">
                                <a href="#"><img src="{{asset('frontend/assets/img/news.jpg')}}" alt="Notebook"></a>
                                <h4 class="heading-03"><a href="#">Students won't get form fill-up fee back</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- add-start -->
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="add"><img src="assets/img/top-ad.jpg" alt=""/></div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="add"><img src="assets/img/top-ad.jpg" alt=""/></div>
            </div>
        </div><!-- /.add-close -->

    </div>
</section><!-- /.2nd-news-section-close -->