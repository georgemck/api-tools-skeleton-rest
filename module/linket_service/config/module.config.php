<?php
return [
    'controllers' => [
        'factories' => [
            'linket_service\\V1\\Rpc\\Ping\\Controller' => \linket_service\V1\Rpc\Ping\PingControllerFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'linket_service.rpc.ping' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/ping',
                    'defaults' => [
                        'controller' => 'linket_service\\V1\\Rpc\\Ping\\Controller',
                        'action' => 'ping',
                    ],
                ],
            ],
            'linket_service.rest.status' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/status[/:status_id]',
                    'defaults' => [
                        'controller' => 'linket_service\\V1\\Rest\\Status\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'linket_service.rpc.ping',
            1 => 'linket_service.rest.status',
        ],
    ],
    'api-tools-rpc' => [
        'linket_service\\V1\\Rpc\\Ping\\Controller' => [
            'service_name' => 'Ping',
            'http_methods' => [
                0 => 'GET',
            ],
            'route_name' => 'linket_service.rpc.ping',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'linket_service\\V1\\Rpc\\Ping\\Controller' => 'Json',
            'linket_service\\V1\\Rest\\Status\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'linket_service\\V1\\Rpc\\Ping\\Controller' => [
                0 => 'application/vnd.linket_service.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
            'linket_service\\V1\\Rest\\Status\\Controller' => [
                0 => 'application/vnd.linket_service.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'linket_service\\V1\\Rpc\\Ping\\Controller' => [
                0 => 'application/vnd.linket_service.v1+json',
                1 => 'application/json',
            ],
            'linket_service\\V1\\Rest\\Status\\Controller' => [
                0 => 'application/vnd.linket_service.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-content-validation' => [
        'linket_service\\V1\\Rpc\\Ping\\Controller' => [
            'input_filter' => 'linket_service\\V1\\Rpc\\Ping\\Validator',
        ],
        'linket_service\\V1\\Rest\\Status\\Controller' => [
            'input_filter' => 'linket_service\\V1\\Rest\\Status\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'linket_service\\V1\\Rpc\\Ping\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'ack',
            ],
        ],
        'linket_service\\V1\\Rest\\Status\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'max' => '140',
                            'min' => '1',
                        ],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'message',
                'description' => 'A status message of n more than 140 characters',
                'error_message' => 'Must be between 1 and 140 characters',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'user',
                'description' => 'The user submitting the status message.',
            ],
            2 => [
                'required' => false,
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\Digits::class,
                        'options' => [],
                    ],
                ],
                'filters' => [],
                'name' => 'timestamp',
                'description' => 'The timestamp when the status message was last modified.',
            ],
        ],
    ],
    'service_manager' => [
        'factories' => [
            \linket_service\V1\Rest\Status\StatusResource::class => \linket_service\V1\Rest\Status\StatusResourceFactory::class,
        ],
    ],
    'api-tools-rest' => [
        'linket_service\\V1\\Rest\\Status\\Controller' => [
            'listener' => \linket_service\V1\Rest\Status\StatusResource::class,
            'route_name' => 'linket_service.rest.status',
            'route_identifier_name' => 'status_id',
            'collection_name' => 'status',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \StatusLib\Entity::class,
            'collection_class' => \StatusLib\Collection::class,
            'service_name' => 'Status',
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \linket_service\V1\Rest\Status\StatusEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'linket_service.rest.status',
                'route_identifier_name' => 'status_id',
                'hydrator' => \Laminas\Hydrator\ObjectPropertyHydrator::class,
            ],
            \linket_service\V1\Rest\Status\StatusCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'linket_service.rest.status',
                'route_identifier_name' => 'status_id',
                'is_collection' => true,
            ],
            \StatusLib\Entity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'linket_service.rest.status',
                'route_identifier_name' => 'status_id',
                'hydrator' => \Laminas\Hydrator\ObjectPropertyHydrator::class,
            ],
            \StatusLib\Collection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'linket_service.rest.status',
                'route_identifier_name' => 'status_id',
                'is_collection' => true,
            ],
        ],
    ],
];
