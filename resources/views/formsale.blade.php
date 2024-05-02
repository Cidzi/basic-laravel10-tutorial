@extends('layouts.app')
@section('title','FormSale')
@section('content')
<h2 class="text text-center py-2">FormSale</h2>
    <form action="/author/insert" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        @error('title')
            <div class="my-2">
                <span class="text text-danger">{{$message}}</span>
            </div>
        @enderror
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="5" class="form-control"></textarea>
        </div>
        @error('content')
        <div class="my-2">
            <span class="text text-danger">{{$message}}</span>
        </div>
    @enderror
        <input type="submit" value="save" class="btn btn-primary my-2">
    </form>
    <script>
        ClassicEditor
            .create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection