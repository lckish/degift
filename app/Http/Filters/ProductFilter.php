<?php

namespace App\Http\Filters;

use Illuminate\Database\Query\Builder;

class ProductFilter extends AbstractFilter
{

    const CATEGORIES = 'categories';
    const COLORS = 'color';
    const PRICE = 'price';
    const TAGS = 'tags';


    protected function getCallback(): array
    {
        [
            self::CATEGORIES => [$this, 'categories'],
            self::COLORS => [$this, 'color'],
            self::PRICE => [$this, 'price'],
            self::TAGS => [$this, 'tags'],
        ];
    }

    protected function categories(Builder $builder, $value)
    {
        $builder->whereIn('category_id', $value);
    }

    protected function color(Builder $builder, $value)
    {
        $builder->whereIn('color_id', $value);
    }

    protected function price(Builder $builder, $value)
    {
        $builder->whereBetween($value['from'], $value['to']);
    }

    protected function tags(Builder $builder, $value)
    {
        $builder->whereHas('tags', function ($b) use ($value) {
            $b-whereIn('tag_id', $value);
        });
    }
}
