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
                            <h4 class="mb-1 mb-sm-0">Welcome To Ahmad News</h4>
                        </div>
                        <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <a href="{{url('/')}}" target="_blank"
                             class="btn btn-outline-light btn-rounded get-started-btn">Visit Frontend</a>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sub District Page</h4>
                <div class="template-demo">
                    <a href="{{route('sub_district.create')}}"><button type="button" class="btn btn-success btn-fw mb-2" style="float: right">Add Sub-District</button></a>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th> ID </th>
                            <th> Sub District English </th>
                            <th> Sub District Urdu </th>
                            <th> District Name </th>
                            <th> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=0)
                        @foreach($subdistricts as $row)
                            <tr>
                                <td> {{$i++}} </td>
                                <td> {{$row->subdistrict_en}}  </td>
                                <td> {{$row->subdistrict_urdu}}  </td>
                                <td> {{$row->district_en}} | {{$row->district_urdu}}  </td>
                                <td>
                                    <a href="{{route('sub_district.edit',$row->id)}}" class="btn btn-info">Edit</a>
                                    <a href="{{route('delete.subdistrict',$row->id)}}" onclick="return confirm('Are You Sure to Delete?')" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div class="mt-3 d-flex justify-content-center">
                        {{$subdistricts->links('pagination-links')}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection