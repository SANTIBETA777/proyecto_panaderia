<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Customer;

use App\Models\Customer;
use MoonShine\Laravel\Resources\ModelResource;
use App\MoonShine\Resources\Customer\Pages\CustomerIndexPage;
use App\MoonShine\Resources\Customer\Pages\CustomerFormPage;

class CustomerResource extends ModelResource
{
    protected string $model = Customer::class;
    protected string $title = 'Customers';

    public function pages(): array
    {
        return [
            CustomerIndexPage::class,
            CustomerFormPage::class,
        ];
    }
}
