<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\Translation\t;


class Product extends Model
{
    use Filterable;

    protected $table = 'products';
    protected $guarded = false;

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'color_products', 'product_id', 'color_id');
    }

    public function getImageUrlAttribute()
    {
        return url('storage/' . $this->preview_image);
    }
//добавление много картинок
    public function productImages()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }


}
