@extends('layouts.app')
@section('title','Customers')
@section('content')
@if (count($customers)>0)
    <h2 class="text text-center py-2">Blog All</h2>
    <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">Customer Name</th>
            <th scope="col">Del</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($customers as $item)
            <tr>
                <td>{{$item->c_name}}</td>
                <td>
                  <a href="{{route('customer',$item->id)}}" class="btn btn-warning">View</a>
                </td>             
            @endforeach        
            </tr>
        </tbody>
      </table>
      {{$customers->links()}}
 <!--  print_r($blogs)  print_r = print Array -->
@else
    <h2 class="text text-center py-2">NO DATA</h2>
@endif
@endsection