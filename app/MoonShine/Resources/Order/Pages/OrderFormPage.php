<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Order\Pages;

use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Fields\Text;
use App\MoonShine\Resources\Order\OrderResource;
use App\Models\Customer;

/**
 * @extends FormPage<OrderResource>
 */
class OrderFormPage extends FormPage
{
    /**
     * @return list<FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Date::make('Fecha del pedido', 'order_date')->required(),
            Text::make('Estado', 'status')->required(),

            Select::make('Cliente', 'customer_id')
                ->options(fn() => Customer::pluck('name', 'id')->toArray())
                ->required(),
        ];
    }
}
