@extends('main.home_master')

@section('content')
    <!-- notice-start -->
    @php
        $notice=\Illuminate\Support\Facades\DB::table('notice')->first()
    @endphp
    @if($notice->status == 1)
        <section>
            <div class="container-fluid">
                <div class="row scroll">
                    <div class="col-md-2 col-sm-3 scroll_01 ">
                        Breaking News :
                    </div>
                    <div class="col-md-10 col-sm-9 scroll_02">
                        <marquee>{!! $notice->notice !!}</marquee>
                    </div>
                </div>
            </div>
        </section>
    @endif


    <!-- single-page-start -->

    <section class="single-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i></a></li>
                        <li><a href="#">
                                @if(session()->get('language')== 'urdu')
                                    {{$post->category_urdu }}
                                @else
                                    {{strtoupper($post->category_en)}}
                                @endif</a></li>
                        <li><a href="#"> @if(session()->get('language')== 'urdu')
                                    {{$post->subcategory_urdu }}
                                @else
                                    {{strtoupper($post->subcategory_en)}}
                                @endif</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <header class="headline-header margin-bottom-10">
                        <h1 class="headline">
                            @if(session()->get('language')== 'urdu')
                                {{$post->title_urdu}}
                            @else
                                {{$post->title_en}}
                            @endif </h1>
                    </header>


                    <div class="article-info margin-bottom-20">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <ul class="list-inline">


                                    <li>{{$post->name}}</li>
                                    <li>
                                        <i class="fa fa-clock-o"></i> {{\Carbon\Carbon::parse($post->post_date)->format('M d ,Y')}}
                                    </li>
                                </ul>

                            </div>
                            <div class="col-md-6 col-sm-6 pull-right">
                                <ul class="social-nav">
                                    <li><a href=""
                                           onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('#'),'facebook-share-dialog','width=626,height=436'); return false;"
                                           target="_blank" title="Facebook" rel="nofollow" class="facebook"><i
                                                    class="fa fa-facebook"></i></a></li>
                                    <li><a target="_blank" href=""
                                           onclick="javascript:window.open('https://twitter.com/share?text=‘#'); return false;"
                                           title="Twitter" rel="nofollow" class="twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a target="_blank" href=""
                                           onclick="window.open('https://plus.google.com/share?url=#'); return false;"
                                           title="Google plus" rel="nofollow" class="google"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" target="_blank" title="Print" rel="nofollow" class="print"><i
                                                    class="fa fa-print"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ******** -->
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="single-news">
                        <img src="{{asset($post->image)}}" alt=""/>
                        <h4 class="caption">
                            @if(session()->get('language')== 'urdu')
                                {{$post->title_urdu}}
                            @else
                                {{$post->title_en}}
                            @endif  </h4>
                        <p style="text-align: center">
                            @if(session()->get('language')== 'urdu')
                                {!! $post->details_urdu!!}
                            @else
                                {!! $post->details_en!!}
                            @endif </p>
                    </div>
                    <!-- ********* -->
                    <hr style="border-width: 3spx">
                    <div class="row">
                        <div class="col-md-12"><h2 class="heading float-right"
                                                   @if(session()->get('language')== 'urdu') style="text-align: right" @endif >@if(session()->get('language')== 'urdu')
                                    متعلقہ خبریں @else Related News @endif </h2></div>



                        @php
                        $more =\Illuminate\Support\Facades\DB::table('posts')->where('category_id',$post->category_id)->orderBy('id','desc')->limit(6)->get();
                        @endphp
                        @foreach($more as $row)
                        <div class="col-md-4 col-sm-4">
                            <div class="top-news sng-border-btm">
                                <a href="{{\Illuminate\Support\Facades\URL::to('view/post/'.$row->id)}}"><img src="{{asset($row->image)}}" alt="Notebook"></a>
                                <h4 class="heading-02"><a href="{{\Illuminate\Support\Facades\URL::to('view/post/'.$row->id)}}">@if(session()->get('language')== 'urdu')
                                            {!! $post->title_urdu!!}
                                        @else
                                            {!! $post->title_en!!}
                                        @endif</a></h4>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>
                <div class="col-md-4 col-sm-4">
                    <!-- add-start -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="sidebar-add"><img src="{{asset('frontend/assets/img/add_01.jpg')}}" alt=""/></div>
                        </div>
                    </div><!-- /.add-close -->
                @include('main.sections.rightSideBar')
                    <!-- add-start -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="sidebar-add"><img src="assets/img/add_01.jpg" alt=""/></div>
                        </div>
                    </div><!-- /.add-close -->
                </div>
            </div>
        </div>
    </section>

@endsection