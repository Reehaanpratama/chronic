<?php

namespace App\Models;

use Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;

    protected $visible = ['nama_supplier'];
    protected $fillable = ['nama_supplier'];
    public $timestamps = true;

    public function barangs()
    {
        return $this->hasMany('App\Models\barang', 'id_supplier');
    }

    public static function boot()
    {

        parent::boot();

        self::deleting(function ($barang) {

            if ($barang->barangs->count() > 0) {

                Alert::error('Failed', 'Data not deleted');

                return false;

            }

        });

    }
}
