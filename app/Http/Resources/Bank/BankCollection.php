<?php

namespace App\Http\Resources\Bank;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BankCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /**
         * THis return an entire array or Collection of Data
         * in JSON array, to the transformer or for Resource Transformation
         */
        return parent::toArray($request);
    }
}
