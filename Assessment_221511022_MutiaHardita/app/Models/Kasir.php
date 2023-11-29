<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;
    protected $table = 'kasirs';
    protected $primaryKey = 'KodeKasir';
    public $incrementing = false;

    protected $fillable = [
        'Nama',
        'HP',
    ];
}
