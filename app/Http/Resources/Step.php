<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Step extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'text' => $this->text,
            'multiple_select' => $this->multiple_select,
            'order' => $this->order        
        ];
    }
}
