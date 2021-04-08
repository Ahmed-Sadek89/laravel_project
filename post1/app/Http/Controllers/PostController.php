<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    public function index(){

        $post=Post::latest()->simplePaginate(5);

        return view('post.index',compact('post'));

    }

    public function create(Request $request){
        $request->validate([
            'username'=>'required',
            'email' =>'required|email',
            'details'=>'required'
        ]);

        $post=new Post();

        $post->username=$request->username;
        $post->email=$request->email;
        $post->details=$request->details;

        $post->save();

        return redirect()->route('Post')->with('success','post created successfully');
    }

    public function showById($id){

        $post=Post::where('id',$id)->first();

        return view('post.show',compact('post'));

    }

    public function edit($id){

        $post=Post::where('id',$id)->first();

        return view('post.update',compact('post'));

    }

    public function update(Request $request){

        $request->validate([
            'username'=>'required',
            'email' =>'required|email',
            'details'=>'required'
        ]);

        $post=Post::where('id',$request->id)->first();
        $post->username=$request->username;
        $post->email=$request->email;
        $post->details=$request->details;

        $post->save();

        return redirect()->route('Post')->with('success','post updated successfully');
    }

    public function delete($id){
        Post::where('id',$id)->delete();
        return redirect()->route('Post')->with('success','post deleted successfully');
    }
}
