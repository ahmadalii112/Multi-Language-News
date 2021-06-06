@extends('admin.admin_master')
@section('admin')
    <div class="card-body">
        <h4 class="card-title">Bordered table</h4>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th> #</th>
                    <th> Post Title</th>
                    <th> Category</th>
                    <th> District</th>
                    <th> Image</th>
                    <th> Post Date</th>
                    <th> Action</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($posts as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{ Str::limit($row->title_en,10) }} | {{Str::limit($row->title_urdu,10)}}</td>
                        <td>{{$row->category_en}} | {{$row->category_urdu}}</td>
                        <td>{{$row->district_en}} | {{$row->district_urdu}}</td>
                        <td><img src="{{$row->image}}" style="width: 50px;height: 50px" alt="image"></td>
                        <td> {{ \Carbon\Carbon::parse($row->post_date)->format('M d, Y') }}</td>
                        <td>
                            <form method="POST" action="{{route('posts.destroy',$row->id)}}">
                                <a href="{{route('posts.edit',$row->id)}}" class="btn btn-info">Edit</a>
                                @method('DELETE') @csrf
                                <button type="submit" name="Delete" class="btn btn-danger"
                                        onclick="return confirm('Are You Sure to Delete?')">Delete
                                </button>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
            <div class="mt-3 d-flex justify-content-center">
                {{$posts->links('pagination-links')}}
            </div>
        </div>
    </div>

@endsection

