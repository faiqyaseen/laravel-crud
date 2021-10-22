<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // With Query Builder

    // function add(Request $req){
    //     $user = DB::table('users');
    //     $user->insert([
    //         'name' => $req->name,
    //         'email' => $req->email,
    //         'password' => Hash::make($req->password)
    //     ]);
    //     return redirect('/');
    // }


    // With Model

    function add(Request $req){
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect('/add');
    }


    // Select With Query Bulder

    // function read(){
    //     $data = DB::table('users')->get();
    //     return view('read',['users' => $data]);     
    // }

    function read(){
        $data = User::all();
        return view('read',['users' => $data]);     
    }

    function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect('/');
    }
    
    function update($id){
        $data = User::find($id);
        return view('update',['data' => $data]);
    }
    function updated(Request $req){
        $user = User::find($req->id);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->save();
        return redirect('/');
    }


}
