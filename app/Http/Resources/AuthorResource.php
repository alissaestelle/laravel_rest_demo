<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthorResource extends JsonResource
{
  // Transform the resource into an array.
  // @return array<string, mixed>

  function toArray(Request $request): array
  {
    // return parent::toArray($request);

    $info = [
        'id' => $this->id,
        'name' => $this->name,
        'publisher' => $this->publisher,
        'email' => $this->email,
        'books' => BookResource::collection($this->books)
    ];

    return $info;
  }
}
