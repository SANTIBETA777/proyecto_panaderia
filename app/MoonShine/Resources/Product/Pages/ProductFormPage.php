<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Product\Pages;

use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Textarea;
use App\MoonShine\Resources\Product\ProductResource;

/**
 * @extends FormPage<ProductResource>
 */
class ProductFormPage extends FormPage
{
    /**
     * @return list<FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Text::make('Nombre', 'name')->required(),
            Text::make('Slug', 'slug')->required(),
            Number::make('Precio', 'price')->required(),
            Textarea::make('Descripción', 'description'),
            Text::make('Categoría ID', 'category_id')->required(), // escribir el ID manualmente
        ];
    }
}
