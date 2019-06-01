@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>List Blogs</h3>
      </div>
      <div class="col-sm-2">
        <a class="btn btn-sm btn-success" href="{{ route('blog.create') }}">Create New Blog</a>
      </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

    <table class="table table-hover table-sm">
      <tr>
        <th width = "50px"><b>No.</b></th>
        <th width = "300px">Title</th>
        <th>Description</th>
        <th width = "180px">Action</th>
      </tr>

      @foreach ($blogs as $blog)
        <tr>
          <td><b>{{++$i}}.</b></td>
          <td>{{$blog->title}}</td>
          <td>{{$blog->description}}</td>
          <td>
            <form action="{{ route('blog.destroy', $blog->id) }}" method="post">
              <a class="btn btn-sm btn-success" href="{{route('blog.show',$blog->id)}}">Show</a>
              <a class="btn btn-sm btn-warning" href="{{route('blog.edit',$blog->id)}}">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>

{!! $blogs->links() !!}
  </div>
@endsection