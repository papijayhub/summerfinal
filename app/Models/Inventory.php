<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = ['name','stock', 'type', 'size', 'description'];

    public function track() {
         //return $this->belongsTo('App\Model\Tracking');
        return $this->hasMany('App\Models\Tracking');
    }
}
