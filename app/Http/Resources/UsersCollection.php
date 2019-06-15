<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UsersCollection extends ResourceCollection
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
                    'Name' => $element->name,
                    'LastName' => $element->LastName,
                    'Email' => $element->email,
                    'PhoneNumber' => $element->PhoneNumber,
                    'Role' => $element->Role->Role
                ];
            })
        ];
    }
}
