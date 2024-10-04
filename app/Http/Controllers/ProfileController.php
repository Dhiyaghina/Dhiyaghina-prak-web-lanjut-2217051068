<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
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

}


