<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'        => $this->id,
            'name'      => $this->name,
            'note'      => $this->note,
            'steps'     => StepResource::collection($this->steps) ?? [],
            'is_done'   => $this->is_done ?  true : false,
        ];
    }
}

