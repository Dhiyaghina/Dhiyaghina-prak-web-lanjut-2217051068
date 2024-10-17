<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\UserModel; 

class UserController extends Controller
{        
    public function profile($nama = "", $npm = "", $kelas = "", $foto=""){
        $data = [
            'nama' => $nama, 
            'npm' => $npm,
            'kelas' => $kelas,
            'foto' => $foto
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
        $request->validate([
            'nama'=> 'required|string|max:255',
            'npm'=> 'required|string|max:255',
            'kelas_id'=> 'required|integer',
            'foto'=> 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ( $request->hasFile('foto') ) {
            $foto = $request->file('foto');
            $filename = time() .'.'. $foto->getClientOriginalExtension();
            $fotoPath = $foto->move(('upload/img'), $filename);
            } else {
            $fotoPath = null;
            }

        $this -> userModel->create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'), // Pastikan tabel yang digunakan sesuai
            'kelas_id' =>$request->input('kelas_id'),
            'foto' => $filename,
        ]); 
        return redirect()->to('/user')->with('success','User berhasil ditambahkan');
        
    
    }
    public function index()
{
    $users = [
        'title' => 'List User',
        'users' => UserModel::all(),
    ];

    return view('list_user', $users);
}
 public function show($id){
    $user = $this->userModel->getUser($id);

    $data = [
        'title' =>'Profile',
        'user' => $user,
    ];
    
    return view('profile', $data);
 }

 public function edit($id){
    $user = UserModel::findOrFail($id);
    $kelasModel = new Kelas();
    $kelas = $kelasModel->getKelas();
    $title = 'Edit User';
    return view('edit_user', compact('user','kelas','title'));
 }

}
