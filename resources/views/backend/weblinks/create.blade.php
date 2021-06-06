@extends('admin.admin_master')
@section('admin')
    <div class="card-body">
        <h4 class="card-title">Add Website Links</h4>
        <form action="{{route('weblinks.store')}}" class="forms-sample mt-4" method="post">
            @csrf
            <div class="form-group">
                <label for="english">Website Name</label>
                <input type="text" class="form-control" name="website_name" id="website_name" placeholder="Web Name">
                @error('website_name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="urdu">Website Links</label>
                <input type="text" class="form-control" name="website_link" id="website_link" placeholder="Web Links">
                @error('website_link')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>

    </div>

@endsection