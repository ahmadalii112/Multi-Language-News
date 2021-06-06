@extends('admin.admin_master')
@section('admin')

    <div class="card-body">
        <h4 class="card-title">Prayer Time Setting</h4>
        <form action="{{route('prayer.update',$prayer->id)}}" class="forms-sample mt-4" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="english">Fajar</label>
                <input type="text" class="form-control" name="fajar" value="{{$prayer->fajar}}" id="fajar" placeholder="fajar">
                @error('fajar')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="urdu">Zohar</label>
                <input type="text" class="form-control" name="zohar" value="{{$prayer->zohar }}" id="meta_title" placeholder="zohar">
                @error('zohar')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="urdu">Asar</label>
                <input type="text" class="form-control" name="asar" value="{{$prayer->asar }}" id="asar" placeholder="asar">
                @error('asar')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="urdu">Maghrib</label>
                <input type="text" class="form-control" name="maghrib" value="{{$prayer->maghrib }}" id="maghrib" placeholder="maghrib">


                @error('maghrib')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="isha">Isha</label>
                <input type="text" class="form-control" name="isha" value="{{$prayer->isha }}" id="google_analytics" placeholder="isha">
                @error('isha')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>



            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>

    </div>

@endsection