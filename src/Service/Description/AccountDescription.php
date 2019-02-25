<?php
namespace Concrete\Api\Client\Service\Description;

use Concrete\Nightcap\Service\Description\DescriptionInterface;

class AccountDescription implements DescriptionInterface
{

    public function getNamespace()
    {
        return 'account';
    }

    public function getDescription()
    {
        return [
            'operations' => [
                'getResourceOwner' => [
                    'httpMethod' => 'GET',
                    'uri' => '/ccm/api/v1/account/info',
                    'responseModel' => 'accountResponse',
                    'parameters' => []
                ]
            ],
            'models' => [
                'accountResponse' => [
                    'type' => 'object',
                    'additionalProperties' => [
                        'location' => 'json'
                    ]
                ]
            ]
        ];
    }


}