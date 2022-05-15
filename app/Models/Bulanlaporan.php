<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bulanlaporan extends Model
{
    use HasFactory;
    protected $table = "bulan_laporan";

    public function satuankerja()
    {
        return $this->belongsTo(Satuankerja::class);
    }

    public function getBulanlaporan($id_satker)
    {

        $Bulanlaporan = $this->where('id_satker', '=', $id_satker);

        return $Bulanlaporan;
    }
}
