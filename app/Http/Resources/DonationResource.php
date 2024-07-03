<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DonationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'address_id'=> $this->address_id,
            'description' => $this->description,
            'state' => $this->state,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'images' => $this->images, // Assuming 'images' is a relationship
            'user' => new UserResource($this->whenLoaded('user')), // Include specific user data
            'address' => new AddressResource($this->whenLoaded('address')), // Include specific user data

        ];
    }
}
