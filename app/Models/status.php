<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    use HasFactory;
    protected $table = 'status';
    protected $guarded = [];

    public function status_sktm()
    {
        return $this->hasMany(AntreanSKTM::class, 'id_status', 'id_status');
    }
    public function status_kredit()
    {
        return $this->hasMany(AntreanKredit::class, 'id_status', 'id_status');
    }
    public function status_dom()
    {
        return $this->hasMany(AntreanDomisili::class, 'id_status', 'id_status');
    }
}
