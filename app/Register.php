<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'registration';
    protected $primaryKey = 'id';
    protected $fillable = array('email', 'name', 'phone','created_at', 'updated_at');

}
