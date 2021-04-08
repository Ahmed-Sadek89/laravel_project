@extends('post.layout')

@section('title','Home')

@section('content')
@php
    $i=0;
@endphp

<div class='container' style="margin-top: 100px;margin-bottom: 100px;">

    <div class="card">
        <div class="card-body" style='background: #f4f1f1;'>

            @if (Session::has('success'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{Session::get('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

            @endif


            <h1 class='text-center'>create post</h1>
            <form method='post' action='{{route('Post.create')}}'>
                @csrf
                <div class="mb-3">
                  <label class="form-label">username</label>
                  <input type="text" class="form-control" name='username'>
                  <span class="text-danger">@error('username'){{$message}} @enderror</span>
                </div>


                <div class="mb-3">
                  <label class="form-label">email</label>
                  <input type="email" class="form-control" name='email'>
                  <span class="text-danger">@error('email'){{$message}} @enderror</span>
                </div>

                <div class="mb-3">
                    <label class="form-label">details</label>
                    <textarea class="form-control" name='details' rows="3"></textarea>
                    <span class="text-danger">@error('details'){{$message}} @enderror</span>
                </div>


                <button type="submit" class="btn btn-primary">create</button>
              </form>

        </div>
        <div class="card-header">
            <div class="mx-auto" style="width: 300px;padding:15px 0 30px">{{$post->links()}}</div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">username</th>
                    <th scope="col">email</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($post as $item)
                  <tr>
                    <th scope="row">{{++$i}}</th>
                    <td>{{$item->username}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-outline-primary" href='{{route('Post.show',$item->id)}}'>show</a>
                            <a class="btn btn-outline-warning" href='{{route('Post.edit',$item->id)}}'>update</a>
                            <a class="btn btn-outline-danger" href='{{route('Post.delete',$item->id)}}'>delete</a>
                        </div>
                    </td>
                  </tr>
                  @endforeach

                </tbody>

              </table>

        </div>

    </div>

</div>

@endsection
