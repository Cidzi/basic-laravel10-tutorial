@extends('layouts.app')
@section('title','HOME')
@section('content')
  <h2>HOME</h2>
  <hr>
  @foreach ($blogs as $item)
      <h2>{{$item->title}}</h2>
      <p>{!!Str::limit($item->content,30)!!}</p>
      <a href="/detail/{{$item->id}}">Read More</a>
  @endforeach


@endsection