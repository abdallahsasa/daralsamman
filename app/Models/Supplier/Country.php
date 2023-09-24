<?php

namespace App\Models\Supplier;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = array('name','status','code');
    public function suppliers()
    {
        return $this->hasMany(Supplier::class);
    }
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
