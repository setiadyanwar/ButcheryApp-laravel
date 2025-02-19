<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class CheckOutModel extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'tbl_checkout';
    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'produk_id',
        'supplier_id',
        'foto',
        'nama_produk',
        'varian',
        'harga',
        'qty',
        'harga_total',
        'note'
    ];
}
