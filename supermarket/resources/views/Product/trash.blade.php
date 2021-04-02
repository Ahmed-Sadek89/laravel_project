@extends('Product.main')

@section('content')

    @php
        $i=0;
    @endphp

    <div class="jumbotron container">
        <h1 class="display-4">Trash</h1>
        <div class="container"><hr class="my-4 container"></div>
        <a class="btn btn-success btn-lg" href="{{route('Product')}}" role="button">home</a>
      </div>

      @if ($message = Session::get('succ'))
        <div class="alert alert-success container" role="alert">
            {{$message}}
          </div>
      @elseif ($message = Session::get('fail'))
      <div class="alert alert-danger container" role="alert">
        {{$message}}
      </div>
      @endif


      <table class=" container table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Product Number</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($product as $item)
          <tr>
            <th scope="row">{{++$i}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->price}} $</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a type="button" class="btn btn-info" href="{{route('Product.restore',$item->id)}}">Restore</a>
                    <a type="button" class="btn btn-danger" href="{{route('Product.delete',$item->id)}}">Delete</a>
                 </div>
            </td>
          </tr>
          {{-- Product/edit/{{$item->id}} --}}
          @endforeach
        </tbody>
      </table>

    <div class="container mx-auto" style="width: 200px;">{{$product->links()}}</div>

@endsection
