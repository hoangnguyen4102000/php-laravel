<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table ="NhanVien";
    public $timestamp =false;
    protected $fillable=['MaNV','TenNV','NgaySinhNV','SDTNV','DiaChiNV','GmailNV','LuongNV'];
    public function Khucanho()
    {
        return $this->hasMany(Canho::class,"MaNV","MaNV");
    }
}
