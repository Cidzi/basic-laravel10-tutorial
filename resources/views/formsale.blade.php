@extends('layouts.app')
@section('title','FormSale')
@section('content')
<h2 class="text text-center py-2">FormSale</h2>
    <form action="/insertorder" method="POST">
        @csrf
        <div class="form-group">
            <label for="customer">Customer</label>    
            <select name="customer">
                @foreach ($customer as $item)           
                <option value="{{$item->id}}">{{$item->c_name}}</option>   
                @endforeach                  
            </select>
        </div>
        <br>
        <div class="form-group">
            <div class="checkbox">
            <label for="checkbox1" class="form-check-label ">Product</label><br>
            @foreach ($product as $Pitem)                
                <input type="checkbox" id="radio{{$Pitem->id}}" name="product[]" value="{{$Pitem->id}}"><label for="radio{{$Pitem->id}}">{{$Pitem->p_name}}</label>
            @endforeach 
            </div>
        </div>
        @error('product')
        <div class="my-2">
            <span class="text text-danger">{{$message}}</span>
        </div>
    @enderror
        <input type="submit" value="save" class="btn btn-primary my-2">
    </form>
@endsection