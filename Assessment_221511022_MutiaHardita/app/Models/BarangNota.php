<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangNota extends Model
{
    use HasFactory;
    protected $table = 'barangnotas';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable = [
        'KodeNota',
        'KodeBarang',
        'JumlahBarang',
        'HargaSatuan',
        'Jumlah',
    ];

    public function nota()
    {
        return $this->belongsTo(Nota::class, 'KodeNota');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'KodeBarang');
    }
}
