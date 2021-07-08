<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($user){

       $user= User::findOrfail($user);
        return view('profile.index',compact('user'));
    }

     public function edit(User $user){
        return view('profile.edit', compact('user'));
     }

     public function update(User $user){
        $data= request()->validate([
            'title'=>'required',
            'description'=>'required',
            'url'=>'url',
            'image'=>''

        ]);
       $user->profile()->update($data);

return redirect('/profile/{$user->id}');


     }
}
