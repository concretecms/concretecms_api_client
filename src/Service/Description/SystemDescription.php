<?php
namespace Concrete\Api\Client\Service\Description;

use Concrete\Nightcap\Service\Description\DescriptionInterface;

class SystemDescription implements DescriptionInterface
{

    public function getNamespace()
    {
        return 'system';
    }

    public function getDescription()
    {
        return [
            'operations' => [
                'getSystemInformation' => [
                    'httpMethod' => 'GET',
                    'uri' => '/ccm/api/v1/system/info',
                    'responseModel' => 'infoResponse',
                    'parameters' => []
                ]
            ],
            'models' => [
                'infoResponse' => [
                    'type' => 'object',
                    'additionalProperties' => [
                        'location' => 'json'
                    ]
                ]
            ]
        ];
    }


}