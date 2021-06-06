@extends('admin.admin_master')
@section('admin')
    <div class="card-body">
        <h4 class="card-title">Insert New Video</h4>
        <form action="{{route('video.update',$video->id)}}" class="forms-sample mt-4" method="post">
            @csrf
            @method('put')

            <div class="form-group">
                <label for="title">Video Title</label>
                <input type="text" class="form-control" name="title" value="{{$video->title}}" id="title">
                @error('title')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="photo">Video Embed Code </label>
                <input type="text" class="form-control" value="{{$video->embed_code}}" name="embed_code" id="photo">
                @error('photo')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="title">Video Type</label>
                <select class="form-control" name="type" id="">
                    @if($video->type == 0)
                        <option selected value="0">Small Video</option>
                        <option value="1">Big Video</option>
                    @elseif($video->type == 1)
                        <option value="0">Small Video</option>
                        <option selected value="1">Big Video</option>
                    @endif
                </select>


            </div>


            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
    </div>

@endsection