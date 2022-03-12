<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $visible = ['nama_barang', 'id_supplier', 'stok', 'warna', 'ukuran', 'harga', 'cover'];
    protected $fillable = ['nama_barang', 'id_supplier', 'stok', 'warna', 'ukuran', 'harga', 'cover'];
    public $timestamps = true;

    public function supplier()
    {
        return $this->belongsTo('App\Models\supplier', 'id_supplier');
    }
    public function transaksi()
    {
        $this->hasMany('App\Models\transaksi', 'id_barang');
    }

    public function image()
    {
        if($this->cover && file_exists(public_path('image/barang/' . $this->cover))) {
            return asset('image/barang/' . $this->cover);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteImage()
    {
        if($this->cover && file_exists(public_path('image/barang/' . $this->cover))) {
            return unlink(public_path('image/barang/' . $this->cover));
        }
    }
}
