<section class="news-section">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-9 col-sm-9">

<!--                <div class="cetagory-title-02"><a href="#">Feature <i class="fa fa-angle-right"
                                                                      aria-hidden="true"></i> all district news tab
                        here <span><i class="fa fa-plus" aria-hidden="true"></i> All News  </span></a></div>

                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="top-news">
                            <a href="#"><img src="{{asset('frontend/assets/img/news.jpg')}}" alt="Notebook"></a>
                            <h4 class="heading-02"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a></h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="image-title">
                            <a href="#"><img src="{{asset('frontend/assets/img/news.jpg')}}" alt="Notebook"></a>
                            <h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a></h4>
                        </div>
                        <div class="image-title">
                            <a href="#"><img src="{{asset('frontend/assets/img/news.jpg')}}" alt="Notebook"></a>
                            <h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a></h4>
                        </div>
                        <div class="image-title">
                            <a href="#"><img src="{{asset('frontend/assets/img/news.jpg')}}" alt="Notebook"></a>
                            <h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a></h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="image-title">
                            <a href="#"><img src="{{asset('frontend/assets/img/news.jpg')}}" alt="Notebook"></a>
                            <h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a></h4>
                        </div>
                        <div class="image-title">
                            <a href="#"><img src="{{asset('frontend/assets/img/news.jpg')}}" alt="Notebook"></a>
                            <h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a></h4>
                        </div>
                        <div class="image-title">
                            <a href="#"><img src="{{asset('frontend/assets/img/news.jpg')}}" alt="Notebook"></a>
                            <h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a></h4>
                        </div>
                    </div>
                </div>
                &lt;!&ndash; ******* &ndash;&gt;
                <br/>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="cetagory-title-02"><a href="#">Sci-Tech<i class="fa fa-angle-right"
                                                                              aria-hidden="true"></i> <span><i
                                            class="fa fa-plus" aria-hidden="true"></i> সব খবর  </span></a></div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="bg-gray">
                            <div class="top-news">
                                <a href="#"><img src="{{asset('frontend/assets/img/news.jpg')}}" alt="Notebook"></a>
                                <h4 class="heading-02"><a href="#">Facebook Messenger gets shiny new logo </a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="news-title">
                            <a href="#">Facebook Messenger gets shiny new logo </a>
                        </div>
                        <div class="news-title">
                            <a href="#">Facebook Messenger gets shiny new logo </a>
                        </div>
                        <div class="news-title">
                            <a href="#">Facebook Messenger gets shiny new logo</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="news-title">
                            <a href="#">Facebook Messenger gets shiny new logo </a>
                        </div>
                        <div class="news-title">
                            <a href="#">Facebook Messenger gets shiny new logo </a>
                        </div>
                        <div class="news-title">
                            <a href="#">Facebook Messenger gets shiny new logo </a>
                        </div>
                    </div>
                </div>-->
                <br><br>



                @php
                    use Illuminate\Support\Facades\DB;
                        $district = DB::table('districts')->get();
                        $subdistrict = DB::table('subdistricts')->get();
                @endphp
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="cetagory-title-02"><a href="#">Search by District</a></div>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <form action="{{route('searchBy')}}" method="get">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <select class="form-control" name="district_id" id="district_id">
                                    <option selected="" disabled="">Select...</option>
                                    @foreach($district as $row)
                                        <option value="{{$row->id}}">{{$row->district_en}} | {{$row->district_urdu}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <select class="form-control" name="subdistrict_id" id="subdistrict_id">
                                    <option selected="" disabled="">Select...</option>

                                </select>
                            </div>
                            <div class="col-lg-4">
                                <button class="btn btn-success btn-block" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="sidebar-add">
                            <img src="{{asset('frontend\assets\img\top-ad.jpg')}}" alt=""/>
                        </div>
                    </div>
                </div><!-- /.add-close -->


            </div>
            <div class="col-md-3 col-sm-3">


            @include('main.sections.rightSideBar')




            <!-- Namaz Times -->
                @php
                    $prayer = \Illuminate\Support\Facades\DB::table('prayers')->first();
                @endphp
                <div class="cetagory-title-03">Prayer Time</div>
                <table class="table table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Namaz Name</th>
                        <th scope="col">Time</th>

                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <th scope="row">Fajar</th>
                        <td>{{$prayer->fajar}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Zohar</th>
                        <td>{{$prayer->zohar}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Asar</th>
                        <td>{{$prayer->asar}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Maghrib</th>
                        <td>{{$prayer->maghrib}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Isha</th>
                        <td>{{$prayer->isha}}</td>
                    </tr>

                    </tbody>
                </table>


                <!-- Namaz Times -->


                <div class="cetagory-title-03">Old News</div>
                <form action="" method="post">
                    <div class="old-news-date">
                        <input type="text" name="from" placeholder="From Date" required="">
                        <input type="text" name="" placeholder="To Date">
                    </div>
                    <div class="old-date-button">
                        <input type="submit" value="search ">
                    </div>
                </form>
                <!-- news -->
                <br><br><br><br><br>
                <div class="cetagory-title-04"> Important Website</div>
                <div class="">
                    <div class="news-title-02">
                        <h4 class="heading-03"><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Both
                                education and life must be saved </a></h4>
                    </div>
                    <div class="news-title-02">
                        <h4 class="heading-03"><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Both
                                education and life must be saved</a></h4>
                    </div>
                    <div class="news-title-02">
                        <h4 class="heading-03"><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Both
                                education and life must be saved </a></h4>
                    </div>
                    <div class="news-title-02">
                        <h4 class="heading-03"><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Both
                                education and life must be saved </a></h4>
                    </div>
                    <div class="news-title-02">
                        <h4 class="heading-03"><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Both
                                education and life must be saved </a></h4>
                    </div>
                    <div class="news-title-02">
                        <h4 class="heading-03"><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Both
                                education and life must be saved </a></h4>
                    </div>
                    <div class="news-title-02">
                        <h4 class="heading-03"><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Both
                                education and life must be saved </a></h4>
                    </div>
                    <div class="news-title-02">
                        <h4 class="heading-03"><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Both
                                education and life must be saved </a></h4>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section><!-- /.3rd-news-section-close -->




<!--    this is for District-->
<script type="text/javascript">
    $(document).ready(function () {
        $('select[name="district_id"]').on('change', function () {
            var district_id = $(this).val();
            if (district_id) {
                $.ajax({
                    url: "{{  url('subdistrict/search') }}/" + district_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $("#subdistrict_id").empty();
                        $.each(data, function (key, value) {
                            $("#subdistrict_id").append('<option value="' + value.id + '">' + value.subdistrict_en + ' | ' + value.subdistrict_urdu + '</option>');
                        });

                    },

                });
            } else {
                alert('danger');
            }
        });
    });
</script>


