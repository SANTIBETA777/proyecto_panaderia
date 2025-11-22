<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Customer\Pages;

use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\UI\Fields\Text;
use App\MoonShine\Resources\Customer\CustomerResource;

/**
 * @extends FormPage<CustomerResource>
 */
class CustomerFormPage extends FormPage
{
    /**
     * @return list<FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Text::make('Nombre', 'name')->required(),
            Text::make('Email', 'email')->required(),
            Text::make('Teléfono', 'phone')->required(),
        ];
    }
}
