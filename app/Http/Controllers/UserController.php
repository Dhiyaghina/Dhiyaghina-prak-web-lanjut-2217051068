<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{        
    public function profile(){
        $data = [
            'nama' =>'Dhiya Ghina Hasri',
            'kelas' => 'D',
            'npm' => '2217051068'
        ];
        return view('profile',$data);
        // return view ('profile');
    }

    public function create(){
        return view('create_user');
    }

    public function store(Request $request){
        $data = [
            'nama'=> $request->input('nama'),
            'npm'=> $request->input('npm'),
            'kelas'=> $request->input('kelas'),

        ];
        return view('profile', $data);
    }
}
