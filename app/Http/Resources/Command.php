<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\User;

class Command extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $user = User::find($this->user_id);

        return [
            'id' => $this->id,
            'status' => $this->status,
            'prix' => $this->prix,
            'date' => $this->date,
            'user' => $user,
            'products' => $this->products,
        ];
    }
}
