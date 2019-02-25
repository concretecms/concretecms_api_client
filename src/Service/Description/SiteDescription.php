<?php
namespace Concrete\Api\Client\Service\Description;

use Concrete\Nightcap\Service\Description\DescriptionInterface;

class SiteDescription implements DescriptionInterface
{

    public function getNamespace()
    {
        return 'site';
    }

    public function getDescription()
    {
        return [
            'operations' => [
                'getSiteTrees' => [
                    'uri' => '/ccm/api/v1/site/trees',
                    'httpMethod' => 'GET',
                    'responseModel' => 'SiteTreeList',
                    'parameters' => []
                ],
            ],
            'models' => [
                'SiteTreeList' => [
                    'type' => 'object',
                    'additionalProperties' => [
                        'location' => 'json'
                    ]
                ]
            ]
        ];
    }


}