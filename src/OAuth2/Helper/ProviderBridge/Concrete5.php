<?php
namespace Concrete\Api\Client\OAuth2\Helper\ProviderBridge;

use Concrete\Api\Client\OAuth2\Configuration\ConfigurationInterface;

class Concrete5 extends AbstractProviderBridge
{

    public static function createProvider(ConfigurationInterface $configuration)
    {
        return new \Concrete\OAuth2\Client\Provider\Concrete5(self::getConfig($configuration));
    }

}