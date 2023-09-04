<?php

namespace App\Models\Supplier;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = array('name','status','country_id');
    public function suppliers()
    {
        return $this->hasMany(Supplier::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
