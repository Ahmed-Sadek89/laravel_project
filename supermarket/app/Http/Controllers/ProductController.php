<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
       // $product=DB::select('select * from products where id');

        $product=Product::latest()->paginate(4);
        return view('Product.index',compact('product'));
    }

    public function add(Request $request){
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'details'=>'required'
        ]);

        $query=DB::table('products')->insert([
            'name'=>$request->input('name'),
            'price'=>$request->input('price'),
            'details'=>$request->input('details')
        ]);

        if($query){
            return redirect()->route('Product')->with('succ','product create success :)');
        }else{
            return redirect()->route('Product')->with('fail','product create failed :(');
        }
    }

    public function create(){
        return view('Product.create');

    }


    public function edit($id){

        $row = DB::table('products')->where('id', $id)->first();

        $product=[
            'info'=>$row
        ];

        return view('Product.edit',$product);
    }


    public function update(Request $request){

        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'details'=>'required'
        ]);

        $query=DB::table('products')->where('id', $request->input('id'))->update([
            'name'=>$request->input('name'),
            'price'=>$request->input('price'),
            'details'=>$request->input('details')
        ]);

        if($query){
            return redirect()->route("Product")->with('succ','product Updated success :)');
        }else{
            return redirect()->route("Product")->with('fail','product Updated failed :(');
        }
    }


    public function delete($id){
        DB::table('products')->where('id',$id)->delete();
        return redirect()->route("Product")->with('succ',$id.' product Deleted success :)');
    }



}
