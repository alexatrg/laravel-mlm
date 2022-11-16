<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MLM extends Model
{
    protected $table = "mlm";
    protected $fillable = ['id','name','address','phoneNumber','upline_id','downline_list','downline_total'];
}
