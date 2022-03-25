<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan_detail extends Model
{
    use HasFactory;
    public function barang()
    {
        return $this->belongsTo('App\Models\Barang', 'barang_id', 'id');
    }

    public function pesanan()
    {
        return $this->belongsTo('App\Models\pesan', 'pesanan_id', 'id');
    }
}
