



@php

    $category = \Illuminate\Support\Facades\DB::table('categories')->orderBy('id','ASC')->get();


@endphp



<!-- header-start -->
<section class="hdr_section" style="background-color: black">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-md-2 col-sm-4">
                <div class="header_logo">
                    <a href="/welcome"><img src="{{asset('frontend/assets/img/A.png')}}" style="width: 50px; height: 50px;    margin: 9px 25px;" alt=""></a>
                </div>
            </div>
            <div class="col-xs-6 col-md-8 col-sm-8">
                <div id="menu-area" class="menu_area">
                    <div class="menu_bottom" style="background-color: black">
                        <nav role="navigation" class="navbar navbar-default mainmenu">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" data-target="#navbarCollapse" data-toggle="collapse"
                                        class="navbar-toggle">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Collection of nav links and other content for toggling -->
                            <div id="navbarCollapse" class="collapse navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li><a href="/welcome">
                                            @if(session()->get('language')== 'urdu')
                                                ہوم
                                            @else
                                                Home
                                            @endif</a></li>
                                    @foreach($category as $row)
                                        @php
                                            $subcategories =  \Illuminate\Support\Facades\DB::table('subcategories')->where('category_id',$row->id)->get();
                                        @endphp
                                        <li class="dropdown">
{{--                                            <a href="{{\Illuminate\Support\Facades\URL::to('category/'.$row->id.'/'.$row->category_en)}}" >--}}
                                            <a href="{{route('category.post',['id'=>$row->id,'name'=>$row->category_en])}}" >
                                                @if(session()->get('language')== 'urdu')
                                                    {{$row->category_urdu}}
                                                @else
                                                    {{$row->category_en}}
                                                @endif
                                                <b class="caret"></b></a>
                                            <!-- For subcategory drop down  -->
                                            <ul class="dropdown-menu">
                                                @foreach($subcategories as $row)
                                                    <li><a href="{{route('subcategory.post',['id'=>$row->id,'name'=>$row->subcategory_en])}}"> @if(session()->get('language')== 'urdu')
                                                                {{$row->subcategory_urdu}}
                                                            @else
                                                                {{$row->subcategory_en}}
                                                            @endif
                                                        </a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                @endforeach


                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-2 col-sm-12">
                <div class="header-icon">
                    <ul>
                        <!-- Todo Session -->
                    @if(session()->get('language') == 'urdu')
                        <!-- version-start -->
                            <li class="version"><a style="color: #68bd53;" href="{{route('language.english')}}"><B>ENGLISH</B></a></li>&nbsp;
                            &nbsp;&nbsp;
                        @else
                            <li class="version"><a style="color: #68bd53;" href="{{route('language.urdu')}}"><B>URDU</B></a></li>&nbsp;&nbsp;
                            &nbsp;

                    @endif



                    <!-- login-start -->

                        <!-- search-start -->
                        <li>
                            <div class="search-large-divice">
                                <div class="search-icon-holder"><a href="#" class="search-icon" data-toggle="modal"
                                                                   data-target=".bd-example-modal-lg"><i
                                                class="fa fa-search" aria-hidden="true"></i></a>
                                    <div class="modal fade bd-example-modal-lg" action="<?php echo URl('/'); ?>"
                                         tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><i class="fa fa-times-circle"
                                                                                  aria-hidden="true"></i></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="custom-search-input">
                                                                <form>
                                                                    <div class="input-group">
                                                                        <input class="search form-control input-lg"
                                                                               placeholder="search" value="Type Here.."
                                                                               type="text">
                                                                        <span class="input-group-btn">
                                                <button class="btn btn-lg" type="button"> <i
                                                            class="fa fa-search" aria-hidden="true"></i> </button>
                                            </span></div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- social-start -->
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn-02" style="background-color: black"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button>
                                <div class="dropdown-content">
                                    @php
                                        $social = \Illuminate\Support\Facades\DB::table('socials')->first();
                                    @endphp
                                    <a href="{{$social->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                                    <a href="{{$social->twitter}}""><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
                                    <a href="{{$social->youtube}}""><i class="fa fa-youtube-play" aria-hidden="true"></i> Youtube</a>
                                    <a href="{{$social->instagram}}""><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.header-close -->