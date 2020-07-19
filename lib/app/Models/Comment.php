<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    	'com_id'
    ];
    protected $table = 'vp_comment';
    protected $primarykey = 'com_id';
    protected $guarded = [];
}
