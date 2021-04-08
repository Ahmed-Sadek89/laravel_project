@extends('post.layout')

@section('title','Show')

@section('content')



<div class='container' style="margin-top: 100px;margin-bottom: 100px;">

    <div class="card">
        <div class="card-body">


            <h1 class='text-center'>
                show {{$post->username}}
                <a class="btn btn-outline-primary" href='{{route('Post')}}'>Home</a>
            </h1>

        </div>
        <div class="card-header">
            <form>

                <div class="mb-3">
                    <label class="form-label" >created at</label>
                    <input type="text" class="form-control" value='{{$post->created_at}}' disabled>
                  </div>



                  <div class="mb-3">
                    <label class="form-label" >last edit</label>
                    <input type="text" class="form-control" value='{{$post->updated_at}}' disabled>
                  </div>



                <div class="mb-3">
                  <label class="form-label" >username</label>
                  <input type="text" class="form-control" value='{{$post->username}}' disabled>
                </div>


                <div class="mb-3">
                  <label class="form-label">email</label>
                  <input type="email" class="form-control" value='{{$post->email}}' disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">details</label>
                    <textarea class="form-control"  rows="3" disabled>{!! $post->details !!}</textarea>
                </div>


              </form>


        </div>

    </div>

</div>

@endsection
