@extends('layout')
@section('title','NEWBLOG')
@section('content')
<h2 class="text text-center py-2">New Blog</h2>
    <form action="">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <input type="submit" value="save" class="btn btn-primary my-2">
    </form>

@endsection