<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class pwtugas extends Model
{
    use HasFactory, Notifiable;

    // Nama tabel yang digunakan
    protected $table = 'pwtugas';

    // Primary key
    protected $primaryKey = 'id_petugas';

    // Kolom yang bisa diisi
    protected $fillable = [
        'username',
        'password',
        'nama_petugas',
        'level',
    ];
}
