<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Product;

use App\Models\Product;
use MoonShine\Laravel\Resources\ModelResource;
use App\MoonShine\Resources\Product\Pages\ProductIndexPage;
use App\MoonShine\Resources\Product\Pages\ProductFormPage;

class ProductResource extends ModelResource
{
    protected string $model = Product::class;
    protected string $title = 'Products';

    // Registra las páginas del recurso (Index, Create, Edit) para MoonShine
    public function pages(): array
    {
        return [
            ProductIndexPage::class, // Listado
            ProductFormPage::class,  // Crear/Editar
        ];
    }
}
