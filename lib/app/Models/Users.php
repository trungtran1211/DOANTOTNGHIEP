<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
    	'email','level'
    ];
    protected $table = 'vp_users';
    protected $primarykey = 'id';
    protected $guarded = [];
}
