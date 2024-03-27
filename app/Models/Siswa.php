<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $guarded = ['id'];

    
    // protected $primarykey = 'id_siswa';
    // protected $fillable = [
    //     'nis',
    //     'nama',
    //     'alamat'
    // ];

}
