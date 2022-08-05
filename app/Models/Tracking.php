<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tracking;

class Tracking extends Model
{
    use HasFactory;
    protected $fillable = ['inventory_id', 'time', 'day', 'date', 'type', 'amount'];

    public function inventory() {
        // return $this->hasMany('App\Models\Inventory');
        return $this->belongsTo('App\Models\Inventory');
    }
}
