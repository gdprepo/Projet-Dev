<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Category;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'image' => $this->image,
            'prix' => $this->prix,
            'categories' => $this->categories,
        ];
    
    }

    
}
