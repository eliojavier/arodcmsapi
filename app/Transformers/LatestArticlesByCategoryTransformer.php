<?php

namespace App\Transformers;

use App\Category;
use League\Fractal\TransformerAbstract;

class LatestArticlesByCategoryTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @param Category $category
     * @return array
     */
    public function transform(Category $category)
    {
        return [
            'id' => $category->id,
            'name' => $category->name,
            'articles' => $category->articles
        ];
    }
}
