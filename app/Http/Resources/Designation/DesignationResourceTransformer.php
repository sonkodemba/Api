<?php

namespace App\Http\Resources\Designation;

use Illuminate\Http\Resources\Json\JsonResource;

class DesignationResourceTransformer extends JsonResource
{
    /**
     * Transform the resource into an array.
     * @example:
     * Convert the data fetch from the model into an array of associative arrays
     * or maps or set or dictionary.
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
