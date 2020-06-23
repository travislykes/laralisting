<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\LocationResource;
use App\Http\Resources\CategoryResource;

class ListingResource extends JsonResource
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
            'price' => $this->price,
            'description' => $this->description,
            'featuredImage' => $this->featuredImage,
            'slug' => $this->slug,
            'category_id' =>($this->category_id),
            'location_id' =>new LocationResource($this->location),
            'status' => $this->status,
            'gallery' => $this->gallery,
            'condition' => $this->condition,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'user_id' => $this->user,
            'video_url' => $this->video_url,
            'category'=> new CategoryResource($this->category)
        ];
//        return parent::toArray($request);
    }
}
