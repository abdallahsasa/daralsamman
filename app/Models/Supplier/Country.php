<?php

namespace App\Models\Supplier;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = array('name','status');
    public function Suppliers()
    {
        return $this->hasMany(Supplier::class);
    }
}
