<?php

namespace App\Providers;

use App\Models\Booking;
use App\Models\Property;
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
        //
        $properties = Property::all();
        $bookings = Booking::all();
	    view()->share("properties",$properties  );
	    view()->share("bookings",$bookings  );
    }
}
