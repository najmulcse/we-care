<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
class AdminController extends Controller
{
    //

    public function __construct(){

    }

    public function index(){
    	return view('layouts.adminLayout');
    }

    public function addUser(){
    	return view('users.addUser');
    }

    public function storeUser(Request $request){
    	$user = new User;
    	$user->create($request->all());
    	return back();
    }
    public function allUsers(){

    	$users = User::all();
    	return view('users.allUsers', compact('users'));
    }
}
