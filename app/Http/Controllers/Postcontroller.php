<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Postcontroller extends Controller
{
    public function index(){
        $postd=DB::table('posts')->get();
        return view('post.index',compact('postd'));
    }

    public function create(){
        return view('post.create');
    }

    public function insert(Request $request){
    
        DB::table('posts')->insert([
        'title'=>$request->title,
        'des'=>$request->des,
        ]);
    
        return response('تم اضافه البيانات بنجاح');
    }
}
