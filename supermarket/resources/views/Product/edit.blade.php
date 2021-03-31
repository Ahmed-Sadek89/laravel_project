@extends('Product.main')

@section('content')

<h1>this is Update </h1>

<div class="card container" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Product info</h5>
      <p class="card-text">name => {{$info->name}}---price => {{$info->price}}</p>
      <p class="card-text">details => {{$info->details}}</p>
      <a class="btn btn-primary" href="{{route('Product')}}">Go Back</a>
    </div>
  </div>

<form class='container' action='{{route('Product.update',$info->id)}}' method='POST'>
    @csrf
    <input type="hidden" value='{{$info->id}}' name='id'>

    <div class="form-group">
      <label>product name</label>
      <input type="text" class="form-control" placeholder="ex : product1" name='name' value='{{$info->name}}'>
    </div>
    <div class="form-group">
      <label>product price</label>
      <input type="number" class="form-control" placeholder="ex : @#" name='price' value='{{$info->price}}'>
    </div>
    <div class="form-group">
        <label>product details</label>
        <textarea class="form-control" placeholder="ex : any information about product" name='details' rows="3">{!! $info->details !!}</textarea>
      </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection
