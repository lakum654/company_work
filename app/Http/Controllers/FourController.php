<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\Teacher;
use App\City;
class FourController extends Controller
{
    public function index(){
    //    $t = Teacher::find(1); 
    //    echo $t->name.'<br>';
    //    echo $t->city->name; 
      //return City::find(1)->teacher;  
      //return School::find(2)->teacher;
       $city = City::find(2);
       return view('four.index');
    }
}
