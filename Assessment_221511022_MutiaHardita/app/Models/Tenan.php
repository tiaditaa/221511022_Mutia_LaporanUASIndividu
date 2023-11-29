<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenan extends Model
{
    use HasFactory;
    protected $table = 'tenans';
    protected $primaryKey = 'KodeTenan';
    public $incrementing = false;

    protected $fillable = [
        'NamaTenan',
        'HP',
    ];
}
