<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $guarder = ['id'];

    public function kelas(){
        return $this->belongsTo(Kelas::class,'kelas_id');
    }

}
