<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Ping;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ping;
use App\MoonShine\Resources\Ping\Pages\PingIndexPage;
use App\MoonShine\Resources\Ping\Pages\PingFormPage;
use App\MoonShine\Resources\Ping\Pages\PingDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Ping, PingIndexPage, PingFormPage, PingDetailPage>
 */
class PingResource extends ModelResource
{
    protected string $model = Ping::class;

    protected string $title = 'Pings';
    
    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            PingIndexPage::class,
            PingFormPage::class,
            PingDetailPage::class,
        ];
    }
}
