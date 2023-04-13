<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
  // Transform the resource into an array.
  // @return array<string, mixed>

  function toArray(Request $request): array
  {
    // return parent::toArray($request);

    $info = [
        'id' => $this->id,
        'title' => $this->title,
        'abstract' => $this->abstract,
        'authorID' => $this->authorID,
        'author' => new AuthorResource($this->author)
    ];

    return $info;
  }
}
