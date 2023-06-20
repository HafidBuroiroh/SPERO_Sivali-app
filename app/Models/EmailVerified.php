<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailVerified extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $table = "email_verified";
    protected $fillable = [
        'id','email','otp'
    ];
}
