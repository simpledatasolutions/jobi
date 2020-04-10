<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $table = 'applications';
    protected $primaryKey = 'id';
    protected $fillable = array('email', 'name', 'phone', 'country', 'created_at', 'updated_at');
}
