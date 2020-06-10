<?php
/**
 * Created by PhpStorm.
 * User: sean810720
 * Date: 6/9/20
 * Time: 17:16 PM
 */

namespace Sean810720\Mqtt;

use Illuminate\Support\ServiceProvider;
use Sean810720\Mqtt\MqttClass\Mqtt;

class MqttServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/mqtt.php', 'mqtt');
        $this->publishes([
            __DIR__ . '/config/mqtt.php' => config_path('mqtt.php'),
        ]);
    }

    public function register()
    {
        $this->app->singleton('Mqtt', function () {
            return new Mqtt();
        });
    }

    /**
     * @return array
     */
    public function provides()
    {
        return array('Mqtt');
    }
}
