<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ArticleResource extends ResourceCollection
{
    public static $wrap = 'articles';
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
        'data' => $this->collection,
        'links' => [
            'author' => 'arnold_wamae',
            'website' => 'https://digitecsolution.com'
        ],
    ];
    }
}
