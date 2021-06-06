@extends('main.home_master')

@section('content')
    @include('main.sections.notice')


    <!-- archive_page-start -->
    <section class="single_page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="single_info">
					<span>
						<a href="#"><i class="fa fa-home" aria-hidden="true"></i> /
						</a>  BUSINESS
					</span>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8">

                    @foreach($categoryPosts as $row)
                        <div class="archive_post_sec_again">
                            <div class="row">
                                <div class="col-md-4 col-sm-5">
                                    <div class="archive_img_again">
                                        <a href="{{route('single.post',$row->id)}}"><img src="{{asset($row->image)}}" alt="Notebook"></a>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-7">
                                    <div class="archive_padding_again">
                                        <div class="archive_heading_01">
                                            <a href="#"> @if(session()->get('language')== 'urdu')
                                                    {{$row->title_urdu}}
                                                @else
                                                    {{$row->title_en}}
                                                @endif</a>
                                        </div>

                                        <div class="archive_dtails">
                                            @if(session()->get('language')== 'urdu')
                                                {!!  \Illuminate\Support\Str::limit(($row->details_urdu),150)!!}
                                            @else
                                                {!!  \Illuminate\Support\Str::limit(($row->details_en),150)!!}                                            @endif
                                        </div>
                                        <div class="dtails_btn"><a href="{{route('single.post',$row->id)}}">@if(session()->get('language')== 'urdu')
                                                    مزید پڑھیں
                                                @else
                                                    Read More...
                                                    @endif</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                    <div class="row">
                        <div class="col-md-12">
                            <div class="post-nav">
                                <ul class="pager">
                                    <li class="active"><span class="active">01</span></li>
                                    <li><a href="#">02</a></li>
                                    <li><a href="#" title="next"><i class="fa fa-forward" aria-hidden="true"></i>
                                        </a></li>
                                    <li class="next"><a href="#"><i class="fa fa-fast-forward"
                                                                    aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <!-- add-start -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="sidebar-add"><img src="assets/img/add_01.jpg" alt=""/></div>
                        </div>
                    </div><!-- /.add-close -->
                    <div class="tab-header">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab"
                                                                      data-toggle="tab" aria-expanded="false">Latest</a>
                            </li>
                            <li role="presentation"><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab"
                                                       aria-expanded="true">Popular</a></li>
                            <li role="presentation"><a href="#tab23" aria-controls="tab23" role="tab" data-toggle="tab"
                                                       aria-expanded="true">Popular1</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content ">
                            <div role="tabpanel" class="tab-pane in active" id="tab21">
                                <div class="news-titletab">
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">Shutdown of educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">Shutdown of educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">Shutdown of educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">Shutdown of educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">Shutdown of educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">Shutdown of educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">Shutdown of educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">Shutdown of educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">Shutdown of educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">Shutdown of educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">Shutdown of educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">Shutdown of educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">Shutdown of educational institutions</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab22">
                                <div class="news-titletab">
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#"> educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#"> educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#"> ducational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#"> educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#"> educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#"> educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#"> educational institutions</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab23">
                                <div class="news-titletab">
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">Shutdown of educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">Shutdown of educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">Shutdown of educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">Shutdown of educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">Shutdown of educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">Shutdown of educational institutions</a></h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">Shutdown of educational institutions</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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