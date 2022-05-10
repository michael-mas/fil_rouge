<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'details',
        'description',
        'discount_price',
        'quantity',
        'image',
        'price',
        'quantity',
    ];

    /**
     * The categories that belong to the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories(): BelongsToMany {
        return $this->belongsToMany(Category::class);
    }

    public function getPrice()
    {
        $price = $this->price;

        return number_format($price, 2, ',', ' ') . ' €';
    }
}
