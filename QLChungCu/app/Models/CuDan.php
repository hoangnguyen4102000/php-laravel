<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuDan extends Model
{
    use HasFactory;
    protected $table ="CuDan";
    public $timestamp =false;
    protected $fillable=['MaCuDan','TenCuDan','GioiTinh','NgaySinh','SDT','Gmail'];
    public function Canho()
    {
        return $this->hasMany(Canho::class,"MaCuDan","MaCuDan");
    }
}
