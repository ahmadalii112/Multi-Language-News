@extends('admin.admin_master')
@section('admin')
    <div class="card-body">
        <h4 class="card-title">Edit SubCategory</h4>
        <form action="{{route('sub_categories.update',$subcategory->id)}}" class="forms-sample mt-4" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="english">SubCategory English</label>
                <input type="text" class="form-control" name="subcategory_en" value="{{$subcategory->subcategory_en}}" id="subcategory_en" placeholder="SubCategory English">
                @error('subcategory_en')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="urdu">SubCategory Urdu</label>
                <input type="text" class="form-control" name="subcategory_urdu" value="{{$subcategory->subcategory_urdu}}" id="subcategory_urdu" placeholder="SubCategory Urdu">
                @error('subcategory_urdu')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="urdu">Select Category</label>
                <select class="form-control" name="category_id"  id="exampleFormControlSelect2">
                    <option disabled="" selected="">Select...</option>
                    @foreach($category as $row)
                    <option value="{{$row->id}}">{{$row->category_en}} | {{$row->category_urdu}}</option>
                    @endforeach
                </select>
            </div>



            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
        <div class="template-demo">
            <a href="{{ redirect()->route('sub_categories.index')}}" class="btn btn-outline-warning float-right">Back</a>
        </div>
    </div>

@endsection