<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PlannersCollection extends ResourceCollection
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
            'data' => $this->collection->transform(function($element){
                return [
                    'id' => $element->id, 
                    'Name' => $element->Name,
                    'LastName' => $element->LastName,
                    'Email' => $element->Email,
                    'PhoneNumber' => $element->PhoneNumber
                ];
            })
        ];
    }
}
