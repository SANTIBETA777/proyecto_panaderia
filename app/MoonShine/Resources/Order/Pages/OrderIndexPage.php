<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Order\Pages;

use MoonShine\Laravel\Pages\Crud\IndexPage;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\Text;
use App\MoonShine\Resources\Order\OrderResource;

/**
 * @extends IndexPage<OrderResource>
 */
class OrderIndexPage extends IndexPage
{
    protected function fields(): iterable
    {
        return [
            ID::make()->sortable(),
            Date::make('Fecha del pedido', 'order_date'),
            Text::make('Estado', 'status'),
            Text::make('Cliente', 'customer.name'),
        ];
    }
}
