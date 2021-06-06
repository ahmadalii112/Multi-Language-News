@extends('admin.admin_master')
@section('admin')
    <div class="card-body">
        <h4 class="card-title">Edit Category</h4>
        <form action="{{route('categories.update',$category->id)}}" class="forms-sample mt-4" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="english">Category English</label>
                <input type="text" class="form-control" name="category_en" value="{{$category->category_en}}" id="category_en" placeholder="Category English">
                @error('category_en')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="urdu">Category Urdu</label>
                <input type="text" class="form-control" name="category_urdu" value="{{$category->category_urdu }}" id="category_urdu" placeholder="Category Urdu">
                @error('category_urdu')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
        <div class="template-demo">
            <a href="{{ redirect()->route('categories.index')}}" class="btn btn-outline-warning float-right">Back</a>
        </div>
    </div>

@endsection