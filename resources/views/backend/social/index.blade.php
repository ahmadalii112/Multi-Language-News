@extends('admin.admin_master')
@section('admin')
    <div class="card-body">
        <h4 class="card-title">Social Site Setting</h4>
        <form action="{{route('social.update',$social->id)}}" class="forms-sample mt-4" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="english">Facebook</label>
                <input type="text" class="form-control" name="facebook" value="{{$social->facebook}}" id="facebook" placeholder="FB">
                @error('facebook')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="urdu">Youtube</label>
                <input type="text" class="form-control" name="youtube" value="{{$social->youtube }}" id="youtube" placeholder="YT">
                @error('youtube')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="urdu">Instagram</label>
                <input type="text" class="form-control" name="instagram" value="{{$social->instagram }}" id="instagram" placeholder="INS">
                @error('instagram')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="urdu">Twitter</label>
                <input type="text" class="form-control" name="twitter" value="{{$social->twitter }}" id="twitter" placeholder="TW">
                @error('twitter')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="urdu">Linkedin</label>
                <input type="text" class="form-control" name="linkedin" value="{{$social->linkedin }}" id="linkedin" placeholder="LIN">
                @error('linkedin')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>

    </div>

@endsection