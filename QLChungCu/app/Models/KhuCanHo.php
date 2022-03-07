<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhuCanHo extends Model
{
    use HasFactory;
    protected $table ="KhuCanHo";
    public $timestamp =false;
    protected $fillable=['MaKhu','TenKhu','SoTang','DiaChi','MaNV'];
    public function Canho()
    {
        return $this->hasMany(Canho::class,"MaKhu","MaKhu");
    }
    public function Nhanvien()
    {
        return $this ->belongsTo(Nhanvien::class,"MaNV","MaNV");
    }
}
