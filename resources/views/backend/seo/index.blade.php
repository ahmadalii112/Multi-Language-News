@extends('admin.admin_master')
@section('admin')

    <div class="card-body">
        <h4 class="card-title">Social Site Setting</h4>
        <form action="{{route('seo.update',$seo->id)}}" class="forms-sample mt-4" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="english">Meta Author</label>
                <input type="text" class="form-control" name="meta_author" value="{{$seo->meta_author}}" id="meta_author" placeholder="meta author">
                @error('facebook')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="urdu">Meta Title</label>
                <input type="text" class="form-control" name="meta_title" value="{{$seo->meta_title }}" id="meta_title" placeholder="meta title">
                @error('youtube')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="urdu">Meta Keyword</label>
                <input type="text" class="form-control" name="meta_keyword" value="{{$seo->meta_keyword }}" id="meta_keyword" placeholder="meta keyword">
                @error('instagram')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="urdu">Meta Description</label>

                <textarea class="form-control" name="meta_description" id="summernote">{{$seo->meta_description }}"</textarea>
                @error('twitter')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="urdu">Google Analytics</label>
                <input type="text" class="form-control" name="google_analytics" value="{{$seo->google_analytics }}" id="google_analytics" placeholder="google analytics">
                @error('linkedin')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="urdu">google_verification</label>
                <input type="text" class="form-control" name="google_verification" value="{{$seo->google_verification }}" id="google_verification" placeholder="google verification">
                @error('linkedin')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="urdu">Alexa Analytics</label>
                <input type="text" class="form-control" name="alexa_analytics" value="{{$seo->alexa_analytics }}" id="google_analytics" placeholder="alexa analytics">
                @error('linkedin')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>

    </div>

@endsection