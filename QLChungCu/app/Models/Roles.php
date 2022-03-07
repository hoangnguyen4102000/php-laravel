<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public $timestamps=false;
    protected $fillable =['Name'];
    protected $primaryKey='ID_roles';
    protected $table ='roles';
    public function Admin()
    {
        return $this->belongsToMany('App\Models\Admin');
    }
}
