<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        // $users = DB::table('users')->get();
        // return $users; //its return json data
        // dd($users);  //use it for testing and other code line not excute
        // dump($users);  //use it for testing and other code line will excute
        // $users = DB::table('users')->get();
        // foreach($users as $user){
        //     echo $user->name . "<br>";
        // }

        // all data all column
        $users = DB::table('users')->get();
         return view('allusers',['data'=>$users]);

        // if singel data
        // $users = DB::table('users')->where('id',2)->get();

        // spectial column data
        // $users = DB::table('users')
        // // ->select('name','age as age of ') //show with rename
        // ->select('age')
        // ->distinct() //use for not duplicate
        // ->get();
        // return $users;


             // spectial column data with pluck
        // $users = DB::table('users')
        // ->select('name','age as age of ') //show with rename
        // ->pluck('name','email');
        // return $users;


        // find method singel data
        // $users = DB::table('users')->find(4);
        // return $users;
        // return view('allusers',['data'=>$users]);
    }

    public function singelUser(string $id){
        $user = DB::table('users')->where('id',$id)->get();
        // return $users;
        return view('user',['data' => $user]);

    }

    // // singel data
    public function addUser(){
        $user = DB::table('users')
        ->insertOrIgnore([
            'name'=>'Ram3 Kumar',
            'email'=>'ram3@gmail.com',
            'age'=>19,
            'city'=>'delhi'
        ]);
        // dd($user); //if data inser it value is true
        if ($user){
            echo "<h1>Data Successfully Added.</h1>";
        }else{
            echo "<h1>Data Not added.</h1>";

        }



    // multiple data
    // public function addUser(){
    //     $user = DB::table('users')
    //     ->insert([
    //         [
    //             'name'=>'Rave Kumar',
    //             'email'=>'rave3@gmail.com',
    //             'age'=>29,
    //             'city'=>'delhi',
    //             'created_at'=>now(),
    //             'updated_at'=>now()
    //         ],
    //         [
    //             'name'=>'Rave4 Kumar',
    //             'email'=>'rave4@gmail.com',
    //             'age'=>49,
    //             'city'=>'delhi',
    //             'created_at'=>now(),
    //             'updated_at'=>now()
    //         ]
    //     ]);
        // dd($user); //if data inser it value is true
        if ($user){
            echo "<h1>Data Successfully Added.</h1>";
        }
    }
}
