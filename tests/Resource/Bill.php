<?php

namespace Tests\Resource;

use Laravel\Nova\Resource;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Currency;

class Bill extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \Tests\Bill::class;

    public function fields(Request $request)
    {
        return [
            Currency::make('Amount'),
        ];
    }
}
