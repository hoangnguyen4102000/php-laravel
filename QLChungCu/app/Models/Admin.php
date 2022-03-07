<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    public $timestamps=false;
    protected $fillable=['admin_email','admin_password','admin_name'];
    protected $primaryKey='admin_ID';
    protected $table='admin';
    public function Roles()
    {
        return $this->belongsToMany('App\Models\Roles');
    }
    //ham tro den vender/laravel de lay pass
    public function getAuthPassword()
    {
        return $this->admin_password;
    }
    public function hasAnyRoles($Roles)
    {
        return null !==$this ->Roles()->whereIn('Name',$Roles)->first();
    }
    public function hasRole($Roles)
    {
        return null !==$this ->Roles()->where('Name',$Roles)->first();
    }
}
