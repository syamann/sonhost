<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionsModel extends Model
{
    //
    protected  $fillable =['baslik','konu','email','aciklama','label'];
    protected $table='questions';
    protected $primaryKey='id';
    public $timestamps = false;
}
