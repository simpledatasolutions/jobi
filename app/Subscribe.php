<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    protected $table = 'subscriptions';
    protected $primaryKey = 'id';
    protected $fillable = array('email', 'name', 'phone','created_at', 'updated_at');

}
