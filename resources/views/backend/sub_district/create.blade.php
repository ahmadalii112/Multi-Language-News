@extends('admin.admin_master')
@section('admin')
    <div class="card-body">
        <h4 class="card-title">Create SubDistrict</h4>
        <form action="{{route('sub_district.store')}}" class="forms-sample mt-4" method="post">
            @csrf
            <div class="form-group">
                <label for="english">SubDistrict English</label>
                <input type="text" class="form-control" name="subdistrict_en" id="subdistrict_en" placeholder="SubDistrict English">
                @error('subdistrict_en')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="urdu">SubDistrict Urdu</label>
                <input type="text" class="form-control" name="subdistrict_urdu" id="subdistrict_urdu" placeholder="SubDistrict Urdu">
                @error('subdistrict_urdu')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="urdu">Select District</label>
                <select class="form-control" name="district_id" id="exampleFormControlSelect2">
                    <option disabled="" selected="">Select...</option>
                    @foreach($districts as $row)
                    <option value="{{$row->id}}">{{$row->district_en}} | {{$row->district_urdu}}</option>
                    @endforeach
                </select>
            </div>



            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
        <div class="template-demo">
            <a href="{{ redirect()->route('sub_district.index')}}" class="btn btn-outline-warning float-right">Back</a>
        </div>
    </div>

@endsection