<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntreanKredit extends Model
{
    use HasFactory;

    protected $table = 'antrean_kredit';
    protected $guarded = [];

    // User
    public function pengajuan_kredit()
    {
        return $this->belongsTo(Akun::class, 'username', 'username');
    }
    // Status
    public function kredit_status()
    {
        return $this->belongsTo(status::class, 'id_status', 'id_status');
    }
    //Layanan
    public function input_kredit()
    {
        return $this->belongsTo(Kredit::class, 'id_kredit', 'id_kredit');
    }

}
