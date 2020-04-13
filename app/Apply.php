<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Apply extends Model
{
    use SoftDeletes;
    protected $table = 'applications';
    protected $primaryKey = 'id';
    protected $fillable = array('email', 'name', 'phone', 'country', 'created_at', 'updated_at');
}
