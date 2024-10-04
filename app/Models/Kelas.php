<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    // Perbaikan: Tambahkan titik koma di akhir deklarasi
    protected $table = 'kelas';  // Perbaiki dengan menambahkan ';'

    public function getKelas(){
        return $this->all();
    }

    protected $guarded = ['id'];

    // Relasi hasMany dengan model UserModel
    public function user(){
        return $this->hasMany(UserModel::class, 'kelas_id');
    }
}
