<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use app\User;

class UserController extends Controller
{
    public function create(){

}
    public function store(Request $request)
    {
        $user = new User();
        $user->name =$request->name;
        $user->email -$request->email;
        $user->password = Hash::make($request-> password);
        $user->role=1;
        $user->save();
        return redirect('/');
    }
}