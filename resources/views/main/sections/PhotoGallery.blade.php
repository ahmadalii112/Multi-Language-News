<!-- gallery-section-start -->
<section class="news-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-7">
                <div class="gallery_cetagory-title">
                    @if(session()->get('language')== 'urdu')
                        فوٹو گیلری
                    @else
                        Photo Gallery
                    @endif
                </div>
                @php
                    $photoBig=\Illuminate\Support\Facades\DB::table('photos')->where('type',1)->orderBy('id','DESC')->first();
                    $photoSmall=\Illuminate\Support\Facades\DB::table('photos')->where('type',0)->orderBy('id','DESC')->limit(5)->get();


                @endphp
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="photo_screen">
                            <div class="myPhotos" style="width:100%">
                                <img src="{{asset($photoBig->photo)}}" alt="Avatar">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="photo_list_bg">

                            @foreach($photoSmall as$row)
                                <div class="photo_img photo_border active">
                                    <img src="{{asset($row->photo)}}" alt="image"
                                         onclick="currentDiv(1)">
                                    <div class="heading-03">
                                        {{$row->title}}
                                    </div>
                                </div>
                            @endforeach



                        </div>
                    </div>
                </div>

                <!--=======================================
                Video Gallery clickable jquary  start
            ========================================-->

                <script>
                    var slideIndex = 1;
                    showDivs(slideIndex);

                    function plusDivs(n) {
                        showDivs(slideIndex += n);
                    }

                    function currentDiv(n) {
                        showDivs(slideIndex = n);
                    }

                    function showDivs(n) {
                        var i;
                        var x = document.getElementsByClassName("myPhotos");
                        var dots = document.getElementsByClassName("demo");
                        if (n > x.length) {
                            slideIndex = 1
                        }
                        if (n < 1) {
                            slideIndex = x.length
                        }
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                        }
                        x[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " w3-opacity-off";
                    }
                </script>

                <!--=======================================
                    Video Gallery clickable  jquary  close
                =========================================-->

            </div>


            @php
                $videoBig=\Illuminate\Support\Facades\DB::table('videos')->where('type',1)->orderBy('id','DESC')->first();
                $videoSmall=\Illuminate\Support\Facades\DB::table('videos')->where('type',0)->orderBy('id','DESC')->limit(5)->get();


            @endphp
            <div class="col-md-4 col-sm-5">
                <div class="gallery_cetagory-title"> Video Gallery</div>

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="video_screen">
                            <div class="myVideos" style="width:100%">
                                <div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
                                    {!!$videoBig->embed_code  !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <div class="gallery_sec owl-carousel">

                            @foreach($videoSmall as $row )
                                <div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
                                    <iframe width="853" height="480"
                                            src="https://www.youtube.com/embed/{{$row->embed_code}}"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>


                <script>
                    var slideIndex = 1;
                    showDivss(slideIndex);

                    function plusDivs(n) {
                        showDivss(slideIndex += n);
                    }

                    function currentDivs(n) {
                        showDivss(slideIndex = n);
                    }

                    function showDivss(n) {
                        var i;
                        var x = document.getElementsByClassName("myVideos");
                        var dots = document.getElementsByClassName("demo");
                        if (n > x.length) {
                            slideIndex = 1
                        }
                        if (n < 1) {
                            slideIndex = x.length
                        }
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                        }
                        x[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " w3-opacity-off";
                    }
                </script>

            </div>
        </div>
    </div>
</section> <!-- /.gallery-section-close -->