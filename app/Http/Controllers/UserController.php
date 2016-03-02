<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Validator;

class UserController extends Controller
{
	///usuarios
	public function hola() {

	}
    public function index(Request $request){
    	$users = User::all();
    	if ($this->isJSON($request)){
    		return  $users;
    	} else {
    		return View('users.index');
    	}
    }

    public function create(){
    	return View('users.create');
    }

    public function store(Request $req){
    	$params = $req->only(['email','password','name']);
    	$user = new User($params);


		$validator = Validator::make($req->all(), [
			'name' => 'required',
			'email' => 'required|unique:users',
			'password' => 'required'
			]);

			if ( $validator->fails() ){
    			return (new Response(['message' => 'Hubo un error'], 400));
    		}else{
    			$user->save();
    			return (new Response(['message' => 'Guardado'], 200));	
    		}
    		
    }

    public function show($id){
    	return User::find($id);
    }

    
}
