<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangs extends Model
{
    use HasFactory;
    protected $table = 'daftar_barang';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
