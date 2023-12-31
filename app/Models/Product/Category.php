<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'product_categories';
    protected $primaryKey = 'id';
    protected $fillable = array('name','slug', 'description', 'parent_id', 'status','featured', 'image_name', 'image_url', 'sort_number', 'meta_title', 'meta_description');

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');

    }
    public function subcategories()
    {
        return $this->hasMany(Category::class,'parent_id');

    }
    public function getAllProducts()
    {
        // Start with an empty collection to store the products.
        $products = collect();

        // Add products directly associated with this category.
        $products = $products->merge($this->products);

        // Recursively fetch products from child categories.
        foreach ($this->subcategories as $child) {
            $products = $products->merge($child->getAllProducts());
        }
        return $products;

    }
}
