<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HopDong extends Model
{
    use HasFactory;
    protected $table ="HopDong";
    public $timestamp =false;
    protected $fillable=['MaHopDong','NgayGiaoDich','TenHopDong','MaCuDan','MaCanHo'];
    public function Canho()
    {
        return $this->belongsTo(Canho::class,"MaCanHo","MaCanHo");
    }
    public function Cudan()
    {
        return $this ->belongsTo(Cudan::class,"MaCuDan","MaCuDan");
    }
}
