<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Category\Pages;

use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use App\MoonShine\Resources\Category\CategoryResource;

/**
 * @extends FormPage<CategoryResource>
 */
class CategoryFormPage extends FormPage
{
    /**
     * @return list<FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Text::make('Nombre', 'name')->required(),
            Text::make('Slug', 'slug'),
            Textarea::make('Descripción', 'description'),
        ];
    }
}
