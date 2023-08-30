<?php

namespace App\Models\Product;

use App\Models\Author\Auditor;
use App\Models\Author\Author;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = array('name', 'sku','slug','short_description', 'description','price','image_name','image_url','category_id','status','featured','latest_product','sort_number','meta_title','meta_description','created_at');


    public function category()
    {
        return $this->belongsTo(Category::class,  'category_id');
    }

    public function author()
    {
        return $this->belongsToMany(Author::class, 'author_product');
    }
    public function auditor()
    {
        return $this->belongsToMany(Auditor::class,'auditor_product');
    }

    public function attributes()
    {
        return $this->hasMany(ProductAttributes::class, 'product_id');
    }

    public function media()
    {
        return $this->hasMany(ProductMedia::class, 'product_id');
    }
    public function featuredMedia()
    {
        return $this->media()->where('is_featured', true);
    }

    public function tags()
    {
        return $this->hasMany(ProductTag::class, 'product_id');
    }



}
