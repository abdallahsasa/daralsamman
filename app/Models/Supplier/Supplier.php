<?php

namespace App\Models\Supplier;

use App\Models\Supplier\Country;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = array('name','phone', 'description','email','country_id','status','sort_number','meta_title','meta_description','created_at');
    public function country()
    {
        return $this->belongsTo(Country::class,  'country_id');
    }
}
