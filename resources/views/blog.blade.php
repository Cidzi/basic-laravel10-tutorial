@extends('layouts.app')
@section('title','BLOG')
@section('content')
@if (count($blogs)>0)
    <h2 class="text text-center py-2">Blog All</h2>
    <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Status</th>
            <th scope="col">Edit</th>
            <th scope="col">Del</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>{{Str::limit($item->content,30)}}</td>
                <td>
                    @if ($item->status==true)
                    <a href="{{route('change',$item->id)}}" class="btn btn-success">เผยแพร่</a>
                @else
                    <a href="{{route('change',$item->id)}}" class="btn btn-secondary">ฉบับร่าง</a>
                @endif  
                </td>
                <td>
                  <a href="{{route('edit',$item->id)}}" class="btn btn-warning">Edit</a>
                </td>  
                <td>
                  <a href="{{route('delete',$item->id)}}" 
                    class="btn btn-danger" 
                    onclick="return confirm('Are You Sure??')">Del</a>
                </td>            
            @endforeach        
            </tr>
        </tbody>
      </table>
      {{$blogs->links()}}
 <!--  print_r($blogs)  print_r = print Array -->
@else
    <h2 class="text text-center py-2">NO DATA</h2>
@endif
@endsection