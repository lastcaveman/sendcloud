<?php
/**
 */
namespace Lastcaveman\Sendcloud;

use Illuminate\Support\ServiceProvider;

class SendcloudServiceProvider extends ServiceProvider
{

    public function boot()
    {
        \Auth::provider('sendcloud', function ($app) {
            return new Sendcloud();
        });
    }

    public function register()
    {
        // $this->app['sendcloud'] = $this->app->share(
        //     function ($app) {
        //         return new \Lastcaveman\Sendcloud\Sendcloud();
        //     }
        // );

        $this->app->booting(
            function () {
                $aliases = \Config::get('app.aliases');

                if(empty($aliases['Lastcaveman\SendcloudClass'])){
                    $loader = \Illuminate\Foundation\AliasLoader::getInstance();
                    $loader->alias('Lastcaveman\SendcloudClass','Lastcaveman\Sendcloud\Facades\SendcloudClass');
                }

            }
        );
    }


}