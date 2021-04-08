@extends('post.layout')

@section('title','Update')

@section('content')


<div class='container' style="margin-top: 100px;margin-bottom: 100px;">

    <div class="card">
        <div class="card-body">


            <h1 class='text-center'>
                update {{$post->username}}
                <a class="btn btn-outline-primary" href='{{route('Post')}}'>Home</a>
            </h1>

        </div>
        <div class="card-header">
            <form method='post' action='{{route('Post.update',$post->id)}}'>
                @csrf
                <input type="hidden" name='id' value='{{$post->id}}' >

                <div class="mb-3">
                  <label class="form-label" >username</label>
                  <input type="text" class="form-control" name='username' value='{{$post->username}}' >
                  <span class="text-danger">@error('username'){{$message}} @enderror</span>
                </div>


                <div class="mb-3">
                  <label class="form-label">email</label>
                  <input type="email" class="form-control" name='email' value='{{$post->email}}' >
                  <span class="text-danger">@error('email'){{$message}} @enderror</span>
                </div>

                <div class="mb-3">
                    <label class="form-label">details</label>
                    <textarea class="form-control" name='details' rows="3" >{!! $post->details !!}</textarea>
                    <span class="text-danger">@error('details'){{$message}} @enderror</span>
                </div>

                <button type="submit" class="btn btn-success">update</button>

              </form>


        </div>

    </div>

</div>

@endsection
