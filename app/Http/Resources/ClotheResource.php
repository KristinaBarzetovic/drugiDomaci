<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClotheResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'color' => $this->color,
            'url' => $this->url,
            'description' => $this->description,
            'brand' => [
                'id' => $this->brand->id,
                'name' => $this->brand->name
            ],
            'category' => [
                'id' => $this->clotheCategory->id,
                'id' => $this->clotheCategory->id,
            ]
        ];
    }
}
