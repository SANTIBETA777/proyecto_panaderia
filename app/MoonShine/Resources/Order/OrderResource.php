<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Order;

use App\Models\Order;
use MoonShine\Laravel\Resources\ModelResource;
use App\MoonShine\Resources\Order\Pages\OrderIndexPage;
use App\MoonShine\Resources\Order\Pages\OrderFormPage;

class OrderResource extends ModelResource
{
    protected string $model = Order::class;
    protected string $title = 'Orders';

    public function pages(): array
    {
        return [
            OrderIndexPage::class,
            OrderFormPage::class,
        ];
    }
}
