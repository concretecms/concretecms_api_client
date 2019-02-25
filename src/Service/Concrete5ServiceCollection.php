<?php
namespace Concrete\Api\Client\Service;

use Concrete\Api\Client\Service\Description\AccountDescription;
use Concrete\Api\Client\Service\Description\SiteDescription;
use Concrete\Api\Client\Service\Description\SystemDescription;
use Concrete\Nightcap\Service\ServiceCollection;

class Concrete5ServiceCollection extends ServiceCollection
{

    public function __construct()
    {
        $this->add(new SystemDescription());
        $this->add(new AccountDescription());
        $this->add(new SiteDescription());
    }

}