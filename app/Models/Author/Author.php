<?php

namespace App\Models\Author;

use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table = 'authors';
    protected $primaryKey = 'id';
    protected $fillable = array('first_name','middle_name','last_name','slug','date_of_birth','gender','image_name','image_url','biography','email','number','website','nationality','status','featured','sort_number','meta_title','meta_title','meta_description');

    public function products()
    {
        return $this->hasMany(Product::class, 'author_id');

    }

}
