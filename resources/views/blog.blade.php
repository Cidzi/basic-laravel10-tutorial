@extends('layout')
@section('title','BLOG')
@section('content')
<h2 class="text text-center py-2">Blog All</h2>
<table class="table table-bordered text-center">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($blogs as $item)
        <tr>
            <td>{{$item['title']}}</td>
            <td>{{$item['content']}}</td>
            <td>
                @if ($item['status']==true)
                <a href="#" class="btn btn-success">เผยแพร่</a>
            @else
                <a href="#" class="btn btn-danger">ฉบับร่าง</a>
            @endif  
            </td>

        @endforeach        
        </tr>
    </tbody>
  </table>
 <!--  print_r($blogs)  print_r = print Array -->
@endsection