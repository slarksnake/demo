<?php

namespace Demo\Dianping\Core\Providers;

use Demo\Dianping\Core\Configure;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ConfigServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['config'] = function ($app) {
            return new Configure($app->getConfig());
        };
    }
}
