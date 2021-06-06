@extends('admin.admin_master')
@section('admin')
    <div class="card-body">
        <h4 class="card-title">Insert New Video</h4>
        <form action="{{route('video.store')}}" class="forms-sample mt-4" method="post" >
            @csrf


            <div class="form-group">
                <label for="title">Video Title</label>
                <input type="text" class="form-control" name="title" id="title">
                @error('title')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="photo">Video Embed Code </label>
                <input type="text" class="form-control" name="embed_code" id="photo" >
                @error('photo')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="title">Video Type</label>
                <select class="form-control" name="type" id="">
                    <option value="1">Big Video</option>
                    <option value="0">Small Video</option>
                </select>


            </div>


            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
    </div>

@endsection