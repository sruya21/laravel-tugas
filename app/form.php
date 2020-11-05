<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nama', 'telepon', 'alamat'];
}
