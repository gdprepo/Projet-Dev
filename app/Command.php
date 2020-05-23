<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Product $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products[] = $product;
        }

        return $this;
    }
}
