<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class usercontroller extends Controller
{
public function Index(){
    $users = user::all();
    return view('usuarios',['users' => $users]);
}
 


}