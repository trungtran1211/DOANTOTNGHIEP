<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Custommer extends Model
{
    protected $fillable = [
    	'cus_id'
    ];
    protected $table = 'vp_custommer';
    protected $primarykey = 'cus_id';
    protected $guarded = [];
}
