<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscribe extends Model
{
    use SoftDeletes;
    protected $table = 'subscriptions';
    protected $primaryKey = 'id';
    protected $fillable = array('email', 'name', 'phone','created_at', 'updated_at');

}
