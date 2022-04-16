<?php

namespace App\Providers;
use App\Interfaces\ClassPackRepositoryInterface;
use App\Repositories\ClassPackRepository;
use App\Interfaces\ClassPromoRepositoryInterface;
use App\Repositories\ClassPromoRepository;
use App\Interfaces\OrderRepositoryInterface;
use App\Repositories\OrderRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ClassPackRepositoryInterface::class,
                         ClassPackRepository::class
                        );
        $this->app->bind(ClassPromoRepositoryInterface::class, 
                         ClassPromoRepository::class
                        );
        $this->app->bind(OrderRepositoryInterface::class, 
                        OrderRepository::class
                        ); 
                                      
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
