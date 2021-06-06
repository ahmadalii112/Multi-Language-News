@extends('admin.admin_master')
@section('admin')
    <div class="card-body">
        <h4 class="card-title">Create District</h4>
        <form action="{{route('district.store')}}" class="forms-sample mt-4" method="post">
            @csrf
            <div class="form-group">
                <label for="english">District English</label>
                <input type="text" class="form-control" name="district_en" id="district_en" placeholder="District English">
                @error('district_en')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="urdu">District Urdu</label>
                <input type="text" class="form-control" name="district_urdu" id="district_urdu" placeholder="District Urdu">
                @error('district_urdu')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
        <div class="template-demo">
            <a href="{{route('district.index')}}" class="btn btn-outline-warning float-right">Back</a>
        </div>
    </div>

@endsection