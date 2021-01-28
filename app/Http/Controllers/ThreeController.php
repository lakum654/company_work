<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
class ThreeController extends Controller
{
    public function index(){
      $users = User::has('roles')->get();
      return view('Three.index',compact('users'));
    }

    public function create(){
     $users = User::get();
     $roles = Role::get();
     return view('Three.form',compact('users','roles'));
    }
    public function store(Request $request){
      $user = User::find($request->user);
      $roles = $request->roles;
      //$user->roles()->attach($roles);
      $user->roles()->sync($roles);
      return redirect('three');
      //$user->roles()->detach($roles);
    }
    public function destroy($role_id,$user_id){
        $user = User::find($user_id);
        $user->roles()->detach($role_id);
        return back();
    }
}
