<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Customer\Pages;

use MoonShine\Laravel\Pages\Crud\IndexPage;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use App\MoonShine\Resources\Customer\CustomerResource;

/**
 * @extends IndexPage<CustomerResource>
 */
class CustomerIndexPage extends IndexPage
{
    protected function fields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Nombre', 'name'),
            Text::make('Email', 'email'),
            Text::make('Teléfono', 'phone'),
        ];
    }
}
