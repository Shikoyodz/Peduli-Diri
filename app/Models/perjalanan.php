<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class perjalanan extends Model
{
    use HasFactory;
    protected $table = 'perjalanans';
    protected $fillable = [
        'id_user',
        'tanggal',
        'waktu',
        'lokasi',
        'Suhu',
    ];

    public function User(){
        return $this->belongsTo(User::class,'id_user');
    }
}

