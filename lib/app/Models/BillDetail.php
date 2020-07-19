<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $fillable = [
    	'det_id',
    	'bill_id',
    	'product_id'    	
    ];
    protected $table = 'vp_detailbill';
    protected $primarykey = 'det_id';
    protected $guarded = [];

    /*public function invoiceDetails()
    {
    	return $this->hasMany(\App\Models\BillDetail::class);
    }

    public function customer()
    {
      return $this->belongsTo(\App\Model\Customer::class);
    }
    public function user()
   {
      return $this->belongsTo(\App\User::class);
   }*/
}
