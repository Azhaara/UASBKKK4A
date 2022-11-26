<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananKamar extends Model
{
    protected $fillable =[
        'customer_id','kamar_id','Nama_Customer','No_kamar','Harga','Durasi','Start','End'
    ];
}
