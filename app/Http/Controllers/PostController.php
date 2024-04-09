<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function getPost($id){
        $getPost=DB::table('posts')->where('id',$id)->get();
      //   dd($getPerson);
        return $getPost;
   }
}
