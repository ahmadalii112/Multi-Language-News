@extends('admin.admin_master')
@section('admin')

    <div class="card-body">
        <h4 class="card-title">LiveTv Setting</h4>
        <div class="template-demo">
            @if($liveTv->status ==1)
                <a href="{{route('liveTv.De_active',$liveTv->id)}}">
                    <button type="button" class="btn btn-danger btn-fw mb-2" style="float: right">De-Active</button>
                </a>

            @else
                <a href="{{route('liveTv.active',$liveTv->id)}}">
                    <button type="button" class="btn btn-warning btn-fw mb-2" style="float: right">Active</button>
                </a>
            @endif
            @if($liveTv->status ==1)
                <small class="text-success">Live Tv Activated</small>
            @else
                <small class="text-danger">Live Tv De-Activated</small>

            @endif


        </div>
        <form action="{{route('liveTv.update',$liveTv->id)}}" class="forms-sample mt-4" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="isha">Embed Code for Live Tv</label>
                <textarea class="form-control" name="embed_code" id="summernote">{{$liveTv->embed_code }}</textarea>
                @error('embed_code')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>

    </div>

@endsection