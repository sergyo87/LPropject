<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    protected $users;
    
    public function __construct() {
        
    }
    //
    public function showid($id){
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
    
    public function store(\App\Http\Requests\StoreBlogPost $request){
                
    }
    
    public function update(Request $request, $id){
        
    }
    
    public function showUsers(){
        $users = DB::table('users')->paginate(1);
        return view('users.index', ['users' => $users]);
    }
    
    
}
