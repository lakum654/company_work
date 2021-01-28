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
      $user->roles()->attach($roles);
      return redirect('three');
      //$user->roles()->detach($roles);
    }
    public function edit($id){
     $user = User::find($id);
     $users = User::get();
     $roles = Role::get();
     return view('three._form',compact('users','roles','user'));
    }
    public function update(Request $request){
      $user = User::find($request->user);
      $roles = $request->role;
      $user->roles()->sync($roles);
      return redirect('three');
    }
    public function destroy($role_id,$user_id){
        $user = User::find($user_id);
        $user->roles()->detach($role_id);
        return back();
    }
}
