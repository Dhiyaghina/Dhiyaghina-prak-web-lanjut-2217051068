<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\UserModel; 

class UserController extends Controller
{        
    public function profile($nama = "", $npm = "", $kelas = ""){
        $data = [
            'nama' => $nama, 
            'npm' => $npm,
            'kelas' => $kelas,
        ];
        return view('profile',$data);
        // return view ('profile');
    }

    public function create(){
        return view('create_user',[
            'kelas'=> Kelas::all(),
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255', // Pastikan tabel yang digunakan sesuai
            'kelas_id' => 'required|exists:kelas,id',
        ]); 
         $user = UserModel::create($validatedData);

        $user->load('kelas');

        

        return view('profile', [
            'nama' => $user->nama,
            'npm' => $user->npm,
            'kelas' => $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan',
        ]);
    }
}
