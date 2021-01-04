<?php

namespace App\Http\Resources\Bank;

use Illuminate\Http\Resources\Json\JsonResource;

class BankResourceTransformer extends JsonResource
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
                'name' => $this -> name,
                'descriptions' => $this -> descriptions
        ];
    }
}
