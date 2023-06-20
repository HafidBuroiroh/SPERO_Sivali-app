<?php

namespace App\Models;

use App\Models\NewBarang;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chart extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function barang(){
        return $this->belongsTo(NewBarang::class, 'id_barang');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
