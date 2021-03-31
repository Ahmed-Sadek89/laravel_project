@extends('Product.main')

@section('content')

<div class="card container" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Product Create</h5>
      <a class="btn btn-primary" href="{{route('Product')}}">Go Back</a>
    </div>
  </div>
<form class='container' action='{{route('Product.add')}}' method="POST">
    @csrf
    <div class="form-group">
      <label>product name</label>
      <input type="text" class="form-control" placeholder="ex : product1" name='name'>
      <span style='color:red'>@error('name'){{$message}}@enderror</span>

    </div>

    <div class="form-group">
      <label>product price</label>
      <input type="number" class="form-control" placeholder="ex : @#" name='price'>
      <span style="color:red">@error('price'){{$message}}@enderror</span>

    </div>

    <div class="form-group">
        <label>product details</label>
        <textarea class="form-control" placeholder="ex : any information about product" name='details' rows="3"></textarea>
        <span style="color:red">@error('details'){{$message}}@enderror</span>

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
