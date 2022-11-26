<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable =[
        'customer_id','kamar_id','Nama_Customer','Harga','Payment_date'
    ];
}
