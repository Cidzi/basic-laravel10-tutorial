@extends('layouts.app')
@section('title')
    {{$customer->c_name}}
@endsection

@section('content')
  <h2>{{$customer->c_name}}</h2>

@endsection