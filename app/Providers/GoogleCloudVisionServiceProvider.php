<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleCloudVisionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ImageAnnotatorClient::class, function () {
            return new ImageAnnotatorClient([
                'credentials' => env('GOOGLE_CLOUD_KEY'),
            ]);
        });
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
