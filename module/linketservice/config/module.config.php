<?php
return [
    'service_manager' => [
        'factories' => [],
    ],
    'router' => [
        'routes' => [
            'linketservice.rpc.lax' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/lax',
                    'defaults' => [
                        'controller' => 'linketservice\\V1\\Rpc\\Lax\\Controller',
                        'action' => 'lax',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'linketservice.rpc.lax',
        ],
    ],
    'api-tools-rest' => [],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'linketservice\\V1\\Rpc\\Lax\\Controller' => 'Json',
        ],
        'accept_whitelist' => [
            'linketservice\\V1\\Rpc\\Lax\\Controller' => [
                0 => 'application/vnd.linketservice.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
        ],
        'content_type_whitelist' => [
            'linketservice\\V1\\Rpc\\Lax\\Controller' => [
                0 => 'application/vnd.linketservice.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [],
    ],
    'api-tools-content-validation' => [
        'linketservice\\V1\\Rpc\\Lax\\Controller' => [
            'input_filter' => 'linketservice\\V1\\Rpc\\Lax\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'linketservice\\V1\\Rest\\Ls\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'name',
            ],
        ],
        'linketservice\\V1\\Rpc\\LS2\\Validator' => [
            0 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'name',
            ],
        ],
        'linketservice\\V1\\Rpc\\Lax\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'name',
            ],
        ],
    ],
    'api-tools-mvc-auth' => [
        'authorization' => [],
    ],
    'controllers' => [
        'factories' => [
            'linketservice\\V1\\Rpc\\Lax\\Controller' => \linketservice\V1\Rpc\Lax\LaxControllerFactory::class,
        ],
    ],
    'api-tools-rpc' => [
        'linketservice\\V1\\Rpc\\Lax\\Controller' => [
            'service_name' => 'lax',
            'http_methods' => [
                0 => 'GET',
            ],
            'route_name' => 'linketservice.rpc.lax',
        ],
    ],
];
