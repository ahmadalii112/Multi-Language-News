@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="card-body">
        <h4 class="card-title">Edit Post</h4>
        <form class="forms-sample" method="Post" action="{{route('posts.update',$posts->id)}}"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleInputName1">Title English</label>
                    <input type="text" class="form-control" value="{{$posts->title_en}}" id="title_en" name="title_en"
                           placeholder="English">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputName1">Title Urdu</label>
                    <input type="text" class="form-control" value="{{$posts->title_urdu}}" id="title_urdu"
                           name="title_urdu" placeholder="اُردُو">
                </div>
            </div> <!--end row-->
            <!-- Category-->
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleSelectCategory">Category</label>
                    <select class="form-control" name="category_id" id="category_id">
                        <option selected="" disabled="">Select...</option>
                        @foreach($category as $row)
                            <option value="{{$row->id}}"
                            @if($row->id == $posts->category_id)
                                {{'selected'}}
                                    @endif
                            >{{$row->category_en}} | {{$row->category_urdu}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Sub Category-->
                <div class="form-group col-md-6">
                    <label for="exampleSelectSubCategory">Sub Category</label>
                    <select class="form-control" name="subcategory_id" id="subcategory_id">
                        <option selected="" disabled="">Select...</option>
                        @php
                            use \Illuminate\Support\Facades\DB;
                            //TODO:  we use this to show only value which were selected like if Category(International selected) then subcategory(Asia) selected  in option
                                $subcat = DB::table('subcategories')->where('category_id',$posts->category_id)->get();
                        @endphp
                        @foreach($subcat as $row)
                            <option value="{{$row->id}}"
                            @if($row->id == $posts->subcategory_id)
                                {{'selected'}}
                                    @endif
                            >{{$row->subcategory_en}} | {{$row->subcategory_urdu}}</option>
                        @endforeach
                    </select>
                </div>
            </div> <!--end row-->

            <!-- District-->
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleSelectCategory">District</label>
                    <select class="form-control" name="district_id" id="district_id">
                        <option selected="" disabled="">Select...</option>
                        @foreach($district as $row)
                            <option value="{{$row->id}}"
                            @if($row->id == $posts->district_id)
                                {{'selected'}}
                                    @endif>{{$row->district_en}} | {{$row->district_urdu}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleSelectSubCategory">Sub District</label>
                    <select class="form-control" name="subdistrict_id" id="subdistrict_id">
                        <option selected="" disabled="">Select...</option>
                        @php
                            //TODO:  we use this to show only value which were selected like if District(Sindh selected) then subdistrict(Karachi etc) selected  in option
                                $subdist = DB::table('subdistricts')->where('district_id',$posts->district_id)->get();
                        @endphp
                        @foreach($subdist as $row)
                            <option value="{{$row->id}}"
                            @if($row->id == $posts->subcategory_id)
                                {{'selected'}}
                                    @endif
                            >{{$row->subdistrict_en}} | {{$row->subdistrict_urdu}}</option>
                        @endforeach
                    </select>
                </div>
            </div> <!--end row-->
            {{--Image--}}

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Image upload</label>
                    <img src="http://placehold.it/150x150" id="preview" class="img-thumbnail m-2 float-right"
                         alt="preview"
                         style="border-radius: 50%; width: 100px;height: 100px ">

                    <input type="file" name="image" class="form-control-file btn btn-primary" id="image"
                           accept="image/*"
                           onchange="showPreview(event);">
                </div>
                <div class="form-group col-md-6">
                    <label>Old Image</label>
                    <img src="{{\Illuminate\Support\Facades\URL::to($posts->image)}}" id="preview"
                         class="img-thumbnail m-2 float-right"
                         alt="preview"
                         style="border-radius: 50%; width: 100px;height: 100px ">
                    <input type="hidden" name="oldimage" value="{{$posts->image}}">
                </div>
            </div> <!--end row-->
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleInputName1">Tag English</label>
                    <input type="text" class="form-control" value="{{$posts->tags_en}}" id="tags_en" name="tags_en"
                           placeholder="English">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputName1">Tag Urdu</label>
                    <input type="text" class="form-control" value="{{$posts->tags_urdu}}" id="tags_urdu"
                           name="tags_urdu" placeholder="اُردُو">
                </div>
            </div> <!--end row-->


            <div class="form-group">
                <label for="exampleInputCity1">Details English</label>
                <textarea class="form-control" name="details_en" id="summernote">{{$posts->details_en}}</textarea>

            </div>
            <div class="form-group">
                <label for="exampleInputCity1">Details Urdu</label>
                <textarea class="form-control" name="details_urdu" id="summernote1">{{$posts->details_urdu}}</textarea>
            </div>

            <hr class="bg-gray-dark mt-5">
            <h4 class="text-center mt-4">Extra Options</h4>

            <div class="row">
                <div class="form-check col-md-3">
                    <label class="form-check-label">
                        <input type="checkbox" name="headline" value="1" <?php if ($posts->headline == 1) {
                            echo 'Checked';
                        } ?> class="form-check-input"> Headline <i
                                class="input-helper"></i></label>
                </div>
                <div class="form-check col-md-3">
                    <label class="form-check-label">
                        <input type="checkbox" name="first_section" value="1" <?php if ($posts->first_section == 1) {
                            echo 'Checked';
                        } ?> class="form-check-input"> First Section <i
                                class="input-helper"></i></label>
                </div>

                <div class="form-check col-md-3">
                    <label class="form-check-label">
                        <input type="checkbox" name="first_section_thumbnail" value="1"
                               <?php if ($posts->first_section_thumbnail == 1) {
                                   echo 'Checked';
                               } ?> class="form-check-input"> First
                        Section
                        Thumbnail <i class="input-helper"></i></label>
                </div>
                <div class="form-check col-md-3">
                    <label class="form-check-label">
                        <input type="checkbox" name="bigthumbnail" value="1" <?php if ($posts->bigthumbnail == 1) {
                            echo 'Checked';
                        } ?> class="form-check-input"> General Big
                        Thumbnail<i class="input-helper"></i></label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mr-2">Update</button>
            <button class="btn btn-dark">Cancel</button>
        </form>
    </div>

    <!--    this is for Category-->
    <script type="text/javascript">
        $(document).ready(function () {
            $('select[name="category_id"]').on('change', function () {
                var category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        url: "{{  url('/get/subcategory/') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $("#subcategory_id").empty();
                            $.each(data, function (key, value) {
                                $("#subcategory_id").append('<option value="' + value.id + '">' + value.subcategory_en + ' | ' + value.subcategory_urdu + '</option>');
                            });

                        },

                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>






    {{--    district_id--}}
    {{--    subdistrict_id--}}

    <!--    this is for District-->
    <script type="text/javascript">
        $(document).ready(function () {
            $('select[name="district_id"]').on('change', function () {
                var district_id = $(this).val();
                if (district_id) {
                    $.ajax({
                        url: "{{  url('/get/subcdistrict/') }}/" + district_id,
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





    <!-- Image Preview Scripts-->
    <script>
        function showPreview(event) {

            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);

                var preview = document.getElementById("preview");

                preview.src = src;


                preview.style.display = "block";

            }

        }
    </script>

@endsection

