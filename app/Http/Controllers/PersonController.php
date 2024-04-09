<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PersonController extends Controller
{
   public function getInfo($id){
        $getPerson=DB::table('people')->where('id',$id)->get();
      //   dd($getPerson);
        return $getPerson;
   }
}
