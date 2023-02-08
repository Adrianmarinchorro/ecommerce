<?php

namespace App\Providers;

use App\Models\Order;
use App\Policies\OrderPolicy;
use Illuminate\Support\ServiceProvider;
use Faker\Generator;

class AppServiceProvider extends ServiceProvider
{

    protected $policies = [
        Order::class => OrderPolicy::class,
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //picsum
        $faker = $this->app->make(Generator::class);
        $faker->addProvider(new \Mmo\Faker\PicsumProvider($faker));
        $faker->addProvider(new \Mmo\Faker\LoremSpaceProvider($faker));
    }
}
