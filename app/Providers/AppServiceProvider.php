<?php

namespace App\Providers;

use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::shouldBeStrict(!app()->isProduction());

        if(app()->isProduction()) {

        DB::whenQueryingForLongerThan(CarbonInterval::seconds(5), function (Connection $connection) {
            logger()
                ->channel('telegram')
                -debug('whenQueryingForLongerThan:' . $connection->query()->toSql());
        });
        }
    }
}
