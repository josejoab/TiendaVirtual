<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\ResourceCollection;

class DesignCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'collection-data' => [
                'id' => 'SKU678743',
                'link' => 'http://localhost/product/create',
            ],
        ];
    }
}
