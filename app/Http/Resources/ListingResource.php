<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

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
            'featured_image' => $this->featured_image,
            'slug' => $this->slug,
            'category_id' => $this->category_id,
            'location_id' => $this->location_id,
            'status' => $this->status,
            'gallery' => $this->gallery,
            'condition' => $this->condition,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'user_id' => $this->user_id,
            'video_url' => $this->video_url,
        ];
//        return parent::toArray($request);
    }
}
