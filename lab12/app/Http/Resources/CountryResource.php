<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
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
            'name' => $this->name,
            'code' => $this->code,
            'currency' => $this->currency,
            'area' => $this->area,
            'language' => $this->language,
            // Usunięte: 'created_at' => $this->created_at,
            // Usunięte: 'updated_at' => $this->updated_at,
        ];
    }
}
