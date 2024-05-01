@extends('layouts.app')
@section('title','EDITBLOG')
@section('content')
<h2 class="text text-center py-2">Edit Blog</h2>
    <form action="{{route('update',$blog->id)}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{$blog->title}}">
        </div>
        @error('title')
            <div class="my-2">
                <span class="text text-danger">{{$message}}</span>
            </div>
        @enderror
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="5" class="form-control">{{$blog->content}}</textarea>
        </div>
        @error('content')
        <div class="my-2">
            <span class="text text-danger">{{$message}}</span>
        </div>
    @enderror
        <input type="submit" value="UPDATE" class="btn btn-primary my-2">
    </form>
    <script>
        ClassicEditor
            .create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection