<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Phone;
class OneController extends Controller
{
    public function index(){
        $users = User::has('phone')->get();
        return view('One.index',compact('users'));
    }
    public function create(){
       
        return view('One.form');
    }
    public function store(Request $request){
        $user = User::create(['name'=>$request->name]);
        $phone = new Phone();
        $phone->user_id = $user->id;
        $phone->phone = $request->phone;
        $phone->save();
        return redirect('one');
    }
}
