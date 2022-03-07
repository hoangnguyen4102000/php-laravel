<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CanHo extends Model
{
    use HasFactory;
    protected $table ="CanHo";
    public $timestamp =false;
    protected $fillable=['MaCanHo','SoPhong','TrangThai','DienTich','Gia','AnhCanHo','MaCuDan','MaKhu'];
    public function Khucanho()
    {
        return $this->belongsTo(Khucanho::class,"MaKhu","MaKhu");
    }
    public function Cudan()
    {
        return $this ->belongsTo(Cudan::class,"MaCuDan","MaCuDan");
    }
}
