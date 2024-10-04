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
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();
        $data = [
            'title'=>'Create User',
            'kelas' =>$kelas,
        ];
        return view('create_user',$data);
    }
    public $userModel;
    public $kelasModel;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }
    public function store(Request $request){
        $this -> userModel->create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'), // Pastikan tabel yang digunakan sesuai
            'kelas_id' =>$request->input('kelas_id'),
        ]); 
        return redirect()->to('/user');
        
    
    }
    public function index()
{
    $data = [
        'title' => 'List User',
        'users' => $this->userModel->getUser(),
    ];
    return view('list_user', $data);
}


}
