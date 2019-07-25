<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    //
    protected  $fillable =['baslik','konu','email','aciklama'];
    protected $table='questions';
    protected $primaryKey='id';
    public $timestamps = false;
}
