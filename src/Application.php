<?php

namespace Demo\Dianping;

use Demo\Dianping\Core\ServiceContainer;

/**
 * Class Application.
 * @package Demo\Dianping
 *
 * @property \Demo\Dianping\OAuth\Client $oauth
 * @property \Demo\Dianping\OAuth\SessionClient $session
 * @property \Demo\Dianping\Poi\Client $poi
 * @property \Demo\Dianping\MerchantData\Client $merchant_data
 * @property \Demo\Dianping\Ugc\Client $ugc
 * @property \Demo\Dianping\Book\Client $book
 * @property \Demo\Dianping\Tuangou\Client $tuangou
 */
class Application extends ServiceContainer
{
    protected $providers = [
        OAuth\ServiceProvider::class,
        Poi\ServiceProvider::class,
        MerchantData\ServiceProvider::class,
        Ugc\ServiceProvider::class,
        Book\ServiceProvider::class,
        Tuangou\ServiceProvider::class,
    ];
}
