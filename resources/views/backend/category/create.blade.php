@extends('admin.admin_master')
@section('admin')
    <div class="card-body">
        <h4 class="card-title">Create Category</h4>
        <p class="card-description"> Basic form layout </p>
        <form action="{{route('categories.store')}}" class="forms-sample mt-4" method="post">
            @csrf
            <div class="form-group">
                <label for="english">Category English</label>
                <input type="text" class="form-control" name="category_en" id="category_en" placeholder="Category English">
                @error('category_en')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="urdu">Category Urdu</label>
                <input type="text" class="form-control" name="category_urdu" id="category_urdu" placeholder="Category Urdu">
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