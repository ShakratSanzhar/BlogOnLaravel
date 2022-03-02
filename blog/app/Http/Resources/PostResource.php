<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return ([
            'title'=>$this->title,
            'content'=>$this->content,
            'category'=>CategoryResource::collection($this->category),
            'comments'=>CommentResource::collection($this->comments),
            'tags'=>TagResource::collection($this->tags),
            
        ]);
    }
}
