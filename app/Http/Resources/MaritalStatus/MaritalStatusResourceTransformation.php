<?php

namespace App\Http\Resources\MaritalStatus;

use Illuminate\Http\Resources\Json\JsonResource;

class MaritalStatusResourceTransformation extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
