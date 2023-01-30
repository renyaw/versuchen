<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Akun;

class Masyarakat extends Model
{
    use HasFactory;

    protected $table = 'masyarakat';
    protected $guarded = [];
    protected $hidden = [
        'nama_ibu'
    ];

    public function akun()
    {
        return $this->belongsTo(Akun::class, 'nik', 'nik');
    }
}
