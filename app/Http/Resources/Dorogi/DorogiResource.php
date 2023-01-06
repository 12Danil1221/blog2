<?php

namespace App\Http\Resources\Dorogi;

use Illuminate\Http\Resources\Json\JsonResource;


class DorogiResource extends JsonResource
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
            'title' => $this->title,
            'content' => $this->content,
            'price' => $this->price,
        ];
    }
}
