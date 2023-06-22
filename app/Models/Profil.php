<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profil extends Model
{
    use HasFactory;
    protected $table = "profils";
    protected $fillable = ['user_id', 'jenis_kelamin', 'foto', 'no_telp', 'alamat'];


    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
