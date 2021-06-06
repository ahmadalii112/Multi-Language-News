@extends('admin.admin_master')
@section('admin')
    <div class="card-body">
        <h4 class="card-title">Insert New Photo</h4>
        <form action="{{route('photo.update',$photo->id)}}" class="forms-sample mt-4" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" value="{{$photo->title}}"  name="title" id="title">
                @error('title')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="photo">Photo Upload</label>
                <input type="file" class="form-control"  value="{{$photo->photo}}" name="photo" id="photo" >
                @error('photo')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="title">Photo Type</label>
                <select class="form-control"  name="type" id="type">
                    <option value="1">Big Photo</option>
                    <option value="0">Small Photo</option>
                </select>


            </div>


            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
        <div class="template-demo">
            <a href="{{ redirect()->route('categories.index')}}" class="btn btn-outline-warning float-right">Back</a>
        </div>
    </div>

@endsection