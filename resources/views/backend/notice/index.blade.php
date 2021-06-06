@extends('admin.admin_master')
@section('admin')

    <div class="card-body">
        <h4 class="card-title">Notice Setting</h4>
        <div class="template-demo">
            @if($notice->status ==1)
                <a href="{{route('notice.De_active',$notice->id)}}">
                    <button type="button" class="btn btn-danger btn-fw mb-2" style="float: right">De-Active</button>
                </a>

            @else
                <a href="{{route('notice.active',$notice->id)}}">
                    <button type="button" class="btn btn-warning btn-fw mb-2" style="float: right">Active</button>
                </a>
            @endif
            @if($notice->status ==1)
                <small class="text-success">Notice Activated</small>
            @else
                <small class="text-danger">Notice De-Activated</small>

            @endif


        </div>
        <form action="{{route('notice.update',$notice->id)}}" class="forms-sample mt-4" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="isha">Notice</label>
                <textarea class="form-control" name="notice" id="summernote">{{$notice->notice }}</textarea>
                @error('notice')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>

    </div>

@endsection