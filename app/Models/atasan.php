<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class atasan extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'harga'
    ];
    protected $table="atasan";

}
