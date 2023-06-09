<?php

namespace App\Http\Resources;

use App\Http\Resources\MaterialCategoryResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MaterialResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'                => $this->id,
            'material_category' => $this->material_category_id ? new MaterialCategoryResource($this->materialCategory) : null,
            'name'              => $this->name,
            'number'            => $this->number,
            'description'       => $this->description,
            'uom'               => $this->uom,
            'price'             => $this->price,
            'stock'             => $this->stock,
            'created_at'        => $this->created_at,
        ];
    }
}
