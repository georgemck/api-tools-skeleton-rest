<?php
return [
    'service_manager' => [
        'abstract_factories' => [
            'Laminas\\Db\\Adapter\\AdapterAbstractServiceFactory',
            'Laminas\\Db\\Adapter\\AdapterAbstractServiceFactory',
            'Laminas\\ApiTools\\DbConnectedResourceAbstractFactory',
            'Laminas\\ApiTools\\TableGatewayAbstractFactory'
        ],
        'factories' => [
            'Laminas\\Db\\Adapter\\AdapterInterface' => 'Laminas\\Db\\Adapter\\AdapterServiceFactory',
            'Laminas\\Filter\\FilterPluginManager' => 'Laminas\\Filter\\FilterPluginManagerFactory',
            'Laminas\\Hydrator\\HydratorPluginManager' => 'Laminas\\Hydrator\\HydratorPluginManagerFactory',
            'Laminas\\Hydrator\\StandaloneHydratorPluginManager' => 'Laminas\\Hydrator\\StandaloneHydratorPluginManagerFactory',
            'Laminas\\InputFilter\\InputFilterPluginManager' => 'Laminas\\InputFilter\\InputFilterPluginManagerFactory',
            'Laminas\\Paginator\\AdapterPluginManager' => 'Laminas\\Paginator\\AdapterPluginManagerFactory',
            'Laminas\\Paginator\\ScrollingStylePluginManager' => 'Laminas\\Paginator\\ScrollingStylePluginManagerFactory',
            'Laminas\\Router\\Http\\TreeRouteStack' => 'Laminas\\Router\\Http\\HttpRouterFactory',
            'Laminas\\Router\\RoutePluginManager' => 'Laminas\\Router\\RoutePluginManagerFactory',
            'Laminas\\Router\\RouteStackInterface' => 'Laminas\\Router\\RouterFactory',
            'Laminas\\Validator\\ValidatorPluginManager' => 'Laminas\\Validator\\ValidatorPluginManagerFactory',
            'Laminas\\ApiTools\\MvcAuth\\UnauthenticatedListener' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\ApiTools\\MvcAuth\\UnauthorizedListener' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\ApiTools\\Documentation\\ApiFactory' => 'Laminas\\ApiTools\\Documentation\\Factory\\ApiFactoryFactory',
            'Laminas\\ApiTools\\ApiProblem\\Listener\\ApiProblemListener' => 'Laminas\\ApiTools\\ApiProblem\\Factory\\ApiProblemListenerFactory',
            'Laminas\\ApiTools\\ApiProblem\\Listener\\RenderErrorListener' => 'Laminas\\ApiTools\\ApiProblem\\Factory\\RenderErrorListenerFactory',
            'Laminas\\ApiTools\\ApiProblem\\Listener\\SendApiProblemResponseListener' => 'Laminas\\ApiTools\\ApiProblem\\Factory\\SendApiProblemResponseListenerFactory',
            'Laminas\\ApiTools\\ApiProblem\\View\\ApiProblemRenderer' => 'Laminas\\ApiTools\\ApiProblem\\Factory\\ApiProblemRendererFactory',
            'Laminas\\ApiTools\\ApiProblem\\View\\ApiProblemStrategy' => 'Laminas\\ApiTools\\ApiProblem\\Factory\\ApiProblemStrategyFactory',
            'Laminas\\ApiTools\\Configuration\\ConfigResource' => 'Laminas\\ApiTools\\Configuration\\Factory\\ConfigResourceFactory',
            'Laminas\\ApiTools\\Configuration\\ConfigResourceFactory' => 'Laminas\\ApiTools\\Configuration\\Factory\\ResourceFactoryFactory',
            'Laminas\\ApiTools\\Configuration\\ConfigWriter' => 'Laminas\\ApiTools\\Configuration\\Factory\\ConfigWriterFactory',
            'Laminas\\ApiTools\\Configuration\\ModuleUtils' => 'Laminas\\ApiTools\\Configuration\\Factory\\ModuleUtilsFactory',
            'Laminas\\ApiTools\\OAuth2\\Adapter\\PdoAdapter' => 'Laminas\\ApiTools\\OAuth2\\Factory\\PdoAdapterFactory',
            'Laminas\\ApiTools\\OAuth2\\Adapter\\MongoAdapter' => 'Laminas\\ApiTools\\OAuth2\\Factory\\MongoAdapterFactory',
            'Laminas\\ApiTools\\OAuth2\\Provider\\UserId\\AuthenticationService' => 'Laminas\\ApiTools\\OAuth2\\Provider\\UserId\\AuthenticationServiceFactory',
            'Laminas\\ApiTools\\OAuth2\\Service\\OAuth2Server' => 'Laminas\\ApiTools\\MvcAuth\\Factory\\NamedOAuth2ServerFactory',
            'Laminas\\ApiTools\\MvcAuth\\Authentication' => 'Laminas\\ApiTools\\MvcAuth\\Factory\\AuthenticationServiceFactory',
            'Laminas\\ApiTools\\MvcAuth\\ApacheResolver' => 'Laminas\\ApiTools\\MvcAuth\\Factory\\ApacheResolverFactory',
            'Laminas\\ApiTools\\MvcAuth\\FileResolver' => 'Laminas\\ApiTools\\MvcAuth\\Factory\\FileResolverFactory',
            'Laminas\\ApiTools\\MvcAuth\\Authentication\\DefaultAuthenticationListener' => 'Laminas\\ApiTools\\MvcAuth\\Factory\\DefaultAuthenticationListenerFactory',
            'Laminas\\ApiTools\\MvcAuth\\Authentication\\AuthHttpAdapter' => 'Laminas\\ApiTools\\MvcAuth\\Factory\\DefaultAuthHttpAdapterFactory',
            'Laminas\\ApiTools\\MvcAuth\\Authorization\\AclAuthorization' => 'Laminas\\ApiTools\\MvcAuth\\Factory\\AclAuthorizationFactory',
            'Laminas\\ApiTools\\MvcAuth\\Authorization\\DefaultAuthorizationListener' => 'Laminas\\ApiTools\\MvcAuth\\Factory\\DefaultAuthorizationListenerFactory',
            'Laminas\\ApiTools\\MvcAuth\\Authorization\\DefaultResourceResolverListener' => 'Laminas\\ApiTools\\MvcAuth\\Factory\\DefaultResourceResolverListenerFactory',
            'Laminas\\Authentication\\Storage\\NonPersistent' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\ApiTools\\MvcAuth\\Authentication\\DefaultAuthenticationPostListener' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\ApiTools\\MvcAuth\\Authorization\\DefaultAuthorizationPostListener' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\ApiTools\\Hal\\Extractor\\LinkExtractor' => 'Laminas\\ApiTools\\Hal\\Factory\\LinkExtractorFactory',
            'Laminas\\ApiTools\\Hal\\Extractor\\LinkCollectionExtractor' => 'Laminas\\ApiTools\\Hal\\Factory\\LinkCollectionExtractorFactory',
            'Laminas\\ApiTools\\Hal\\HalConfig' => 'Laminas\\ApiTools\\Hal\\Factory\\HalConfigFactory',
            'Laminas\\ApiTools\\Hal\\JsonRenderer' => 'Laminas\\ApiTools\\Hal\\Factory\\HalJsonRendererFactory',
            'Laminas\\ApiTools\\Hal\\JsonStrategy' => 'Laminas\\ApiTools\\Hal\\Factory\\HalJsonStrategyFactory',
            'Laminas\\ApiTools\\Hal\\Link\\LinkUrlBuilder' => 'Laminas\\ApiTools\\Hal\\Factory\\LinkUrlBuilderFactory',
            'Laminas\\ApiTools\\Hal\\MetadataMap' => 'Laminas\\ApiTools\\Hal\\Factory\\MetadataMapFactory',
            'Laminas\\ApiTools\\Hal\\RendererOptions' => 'Laminas\\ApiTools\\Hal\\Factory\\RendererOptionsFactory',
            'Laminas\\ApiTools\\ContentNegotiation\\ContentTypeListener' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Request' => 'Laminas\\ApiTools\\ContentNegotiation\\Factory\\RequestFactory',
            'Laminas\\ApiTools\\ContentNegotiation\\AcceptListener' => 'Laminas\\ApiTools\\ContentNegotiation\\Factory\\AcceptListenerFactory',
            'Laminas\\ApiTools\\ContentNegotiation\\AcceptFilterListener' => 'Laminas\\ApiTools\\ContentNegotiation\\Factory\\AcceptFilterListenerFactory',
            'Laminas\\ApiTools\\ContentNegotiation\\ContentTypeFilterListener' => 'Laminas\\ApiTools\\ContentNegotiation\\Factory\\ContentTypeFilterListenerFactory',
            'Laminas\\ApiTools\\ContentNegotiation\\ContentNegotiationOptions' => 'Laminas\\ApiTools\\ContentNegotiation\\Factory\\ContentNegotiationOptionsFactory',
            'Laminas\\ApiTools\\ContentNegotiation\\HttpMethodOverrideListener' => 'Laminas\\ApiTools\\ContentNegotiation\\Factory\\HttpMethodOverrideListenerFactory',
            'Laminas\\ApiTools\\ContentValidation\\ContentValidationListener' => 'Laminas\\ApiTools\\ContentValidation\\ContentValidationListenerFactory',
            'Laminas\\ApiTools\\Rest\\OptionsListener' => 'Laminas\\ApiTools\\Rest\\Factory\\OptionsListenerFactory',
            'Laminas\\ApiTools\\Rpc\\OptionsListener' => 'Laminas\\ApiTools\\Rpc\\Factory\\OptionsListenerFactory',
            'Laminas\\ApiTools\\Versioning\\AcceptListener' => 'Laminas\\ApiTools\\Versioning\\Factory\\AcceptListenerFactory',
            'Laminas\\ApiTools\\Versioning\\ContentTypeListener' => 'Laminas\\ApiTools\\Versioning\\Factory\\ContentTypeListenerFactory',
            'Laminas\\ApiTools\\Versioning\\VersionListener' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory'
        ],
        'aliases' => [
            'Laminas\\Db\\Adapter\\Adapter' => 'Laminas\\Db\\Adapter\\AdapterInterface',
            'Zend\\Db\\Adapter\\AdapterInterface' => 'Laminas\\Db\\Adapter\\AdapterInterface',
            'Zend\\Db\\Adapter\\Adapter' => 'Laminas\\Db\\Adapter\\Adapter',
            'FilterManager' => 'Laminas\\Filter\\FilterPluginManager',
            'Zend\\Filter\\FilterPluginManager' => 'Laminas\\Filter\\FilterPluginManager',
            'HydratorManager' => 'Laminas\\Hydrator\\HydratorPluginManager',
            'Zend\\Hydrator\\HydratorPluginManager' => 'Laminas\\Hydrator\\HydratorPluginManager',
            'Zend\\Hydrator\\StandaloneHydratorPluginManager' => 'Laminas\\Hydrator\\StandaloneHydratorPluginManager',
            'InputFilterManager' => 'Laminas\\InputFilter\\InputFilterPluginManager',
            'Zend\\InputFilter\\InputFilterPluginManager' => 'Laminas\\InputFilter\\InputFilterPluginManager',
            'Zend\\Paginator\\AdapterPluginManager' => 'Laminas\\Paginator\\AdapterPluginManager',
            'Zend\\Paginator\\ScrollingStylePluginManager' => 'Laminas\\Paginator\\ScrollingStylePluginManager',
            'HttpRouter' => 'Laminas\\Router\\Http\\TreeRouteStack',
            'router' => 'Laminas\\Router\\RouteStackInterface',
            'Router' => 'Laminas\\Router\\RouteStackInterface',
            'RoutePluginManager' => 'Laminas\\Router\\RoutePluginManager',
            'Zend\\Router\\Http\\TreeRouteStack' => 'Laminas\\Router\\Http\\TreeRouteStack',
            'Zend\\Router\\RoutePluginManager' => 'Laminas\\Router\\RoutePluginManager',
            'Zend\\Router\\RouteStackInterface' => 'Laminas\\Router\\RouteStackInterface',
            'ValidatorManager' => 'Laminas\\Validator\\ValidatorPluginManager',
            'Zend\\Validator\\ValidatorPluginManager' => 'Laminas\\Validator\\ValidatorPluginManager',
            'ZF\\Apigility\\MvcAuth\\UnauthenticatedListener' => 'Laminas\\ApiTools\\MvcAuth\\UnauthenticatedListener',
            'ZF\\Apigility\\MvcAuth\\UnauthorizedListener' => 'Laminas\\ApiTools\\MvcAuth\\UnauthorizedListener',
            'ZF\\Apigility\\Documentation\\ApiFactory' => 'Laminas\\ApiTools\\Documentation\\ApiFactory',
            'Laminas\\ApiTools\\ApiProblem\\ApiProblemListener' => 'Laminas\\ApiTools\\ApiProblem\\Listener\\ApiProblemListener',
            'Laminas\\ApiTools\\ApiProblem\\RenderErrorListener' => 'Laminas\\ApiTools\\ApiProblem\\Listener\\RenderErrorListener',
            'Laminas\\ApiTools\\ApiProblem\\ApiProblemRenderer' => 'Laminas\\ApiTools\\ApiProblem\\View\\ApiProblemRenderer',
            'Laminas\\ApiTools\\ApiProblem\\ApiProblemStrategy' => 'Laminas\\ApiTools\\ApiProblem\\View\\ApiProblemStrategy',
            'ZF\\ApiProblem\\ApiProblemListener' => 'Laminas\\ApiTools\\ApiProblem\\ApiProblemListener',
            'ZF\\ApiProblem\\RenderErrorListener' => 'Laminas\\ApiTools\\ApiProblem\\RenderErrorListener',
            'ZF\\ApiProblem\\ApiProblemRenderer' => 'Laminas\\ApiTools\\ApiProblem\\ApiProblemRenderer',
            'ZF\\ApiProblem\\ApiProblemStrategy' => 'Laminas\\ApiTools\\ApiProblem\\ApiProblemStrategy',
            'ZF\\ApiProblem\\Listener\\ApiProblemListener' => 'Laminas\\ApiTools\\ApiProblem\\Listener\\ApiProblemListener',
            'ZF\\ApiProblem\\Listener\\RenderErrorListener' => 'Laminas\\ApiTools\\ApiProblem\\Listener\\RenderErrorListener',
            'ZF\\ApiProblem\\Listener\\SendApiProblemResponseListener' => 'Laminas\\ApiTools\\ApiProblem\\Listener\\SendApiProblemResponseListener',
            'ZF\\ApiProblem\\View\\ApiProblemRenderer' => 'Laminas\\ApiTools\\ApiProblem\\View\\ApiProblemRenderer',
            'ZF\\ApiProblem\\View\\ApiProblemStrategy' => 'Laminas\\ApiTools\\ApiProblem\\View\\ApiProblemStrategy',
            'ZF\\Configuration\\ConfigResource' => 'Laminas\\ApiTools\\Configuration\\ConfigResource',
            'ZF\\Configuration\\ConfigResourceFactory' => 'Laminas\\ApiTools\\Configuration\\ConfigResourceFactory',
            'ZF\\Configuration\\ConfigWriter' => 'Laminas\\ApiTools\\Configuration\\ConfigWriter',
            'ZF\\Configuration\\ModuleUtils' => 'Laminas\\ApiTools\\Configuration\\ModuleUtils',
            'Laminas\\ApiTools\\OAuth2\\Provider\\UserId' => 'Laminas\\ApiTools\\OAuth2\\Provider\\UserId\\AuthenticationService',
            'ZF\\OAuth2\\Provider\\UserId' => 'Laminas\\ApiTools\\OAuth2\\Provider\\UserId',
            'ZF\\OAuth2\\Adapter\\PdoAdapter' => 'Laminas\\ApiTools\\OAuth2\\Adapter\\PdoAdapter',
            'ZF\\OAuth2\\Adapter\\MongoAdapter' => 'Laminas\\ApiTools\\OAuth2\\Adapter\\MongoAdapter',
            'ZF\\OAuth2\\Provider\\UserId\\AuthenticationService' => 'Laminas\\ApiTools\\OAuth2\\Provider\\UserId\\AuthenticationService',
            'ZF\\OAuth2\\Service\\OAuth2Server' => 'Laminas\\ApiTools\\OAuth2\\Service\\OAuth2Server',
            'authentication' => 'Laminas\\ApiTools\\MvcAuth\\Authentication',
            'authorization' => 'Laminas\\ApiTools\\MvcAuth\\Authorization\\AuthorizationInterface',
            'Laminas\\ApiTools\\MvcAuth\\Authorization\\AuthorizationInterface' => 'Laminas\\ApiTools\\MvcAuth\\Authorization\\AclAuthorization',
            'ZF\\Hal\\Extractor\\LinkExtractor' => 'Laminas\\ApiTools\\Hal\\Extractor\\LinkExtractor',
            'ZF\\Hal\\Extractor\\LinkCollectionExtractor' => 'Laminas\\ApiTools\\Hal\\Extractor\\LinkCollectionExtractor',
            'ZF\\Hal\\HalConfig' => 'Laminas\\ApiTools\\Hal\\HalConfig',
            'ZF\\Hal\\JsonRenderer' => 'Laminas\\ApiTools\\Hal\\JsonRenderer',
            'ZF\\Hal\\JsonStrategy' => 'Laminas\\ApiTools\\Hal\\JsonStrategy',
            'ZF\\Hal\\Link\\LinkUrlBuilder' => 'Laminas\\ApiTools\\Hal\\Link\\LinkUrlBuilder',
            'ZF\\Hal\\MetadataMap' => 'Laminas\\ApiTools\\Hal\\MetadataMap',
            'ZF\\Hal\\RendererOptions' => 'Laminas\\ApiTools\\Hal\\RendererOptions',
            'ZF\\Versioning\\AcceptListener' => 'Laminas\\ApiTools\\Versioning\\AcceptListener',
            'ZF\\Versioning\\ContentTypeListener' => 'Laminas\\ApiTools\\Versioning\\ContentTypeListener',
            'ZF\\Versioning\\VersionListener' => 'Laminas\\ApiTools\\Versioning\\VersionListener'
        ],
        'delegators' => [
            'Laminas\\ApiTools\\MvcAuth\\Authentication\\DefaultAuthenticationListener' => [
                'Laminas\\ApiTools\\MvcAuth\\Factory\\AuthenticationAdapterDelegatorFactory'
            ]
        ],
        'invokables' => [
            'Laminas\\ApiTools\\Rest\\RestParametersListener' => 'Laminas\\ApiTools\\Rest\\Listener\\RestParametersListener'
        ]
    ],
    'input_filters' => [
        'abstract_factories' => [
            'Laminas\\InputFilter\\InputFilterAbstractServiceFactory',
            'Laminas\\InputFilter\\InputFilterAbstractServiceFactory'
        ]
    ],
    'route_manager' => [],
    'router' => [
        'routes' => [
            'api-tools' => [
                'type' => 'literal',
                'options' => [
                    'route' => '/api-tools'
                ],
                'may_terminate' => false,
                'child_routes' => [
                    'documentation' => [
                        'type' => 'segment',
                        'options' => [
                            'route' => '/documentation[/:api[-v:version][/:service]]',
                            'constraints' => [
                                'api' => '[a-zA-Z][a-zA-Z0-9_.%]+'
                            ],
                            'defaults' => [
                                'controller' => 'Laminas\\ApiTools\\Documentation\\Controller',
                                'action' => 'show'
                            ]
                        ]
                    ]
                ]
            ],
            'oauth' => [
                'type' => 'literal',
                'options' => [
                    'route' => '/oauth',
                    'defaults' => [
                        'controller' => 'Laminas\\ApiTools\\OAuth2\\Controller\\Auth',
                        'action' => 'token'
                    ]
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'revoke' => [
                        'type' => 'literal',
                        'options' => [
                            'route' => '/revoke',
                            'defaults' => [
                                'action' => 'revoke'
                            ]
                        ]
                    ],
                    'authorize' => [
                        'type' => 'literal',
                        'options' => [
                            'route' => '/authorize',
                            'defaults' => [
                                'action' => 'authorize'
                            ]
                        ]
                    ],
                    'resource' => [
                        'type' => 'literal',
                        'options' => [
                            'route' => '/resource',
                            'defaults' => [
                                'action' => 'resource'
                            ]
                        ]
                    ],
                    'code' => [
                        'type' => 'literal',
                        'options' => [
                            'route' => '/receivecode',
                            'defaults' => [
                                'action' => 'receiveCode'
                            ]
                        ]
                    ]
                ]
            ],
            'home' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/',
                    'defaults' => [
                        'controller' => 'Application\\Controller\\IndexController',
                        'action' => 'index'
                    ]
                ]
            ],
            'linket_service.rpc.ping' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '[/v:version]/ping',
                    'defaults' => [
                        'controller' => 'linket_service\\V1\\Rpc\\Ping\\Controller',
                        'action' => 'ping',
                        'version' => 1
                    ],
                    'constraints' => [
                        'version' => '\\d+'
                    ]
                ]
            ]
        ]
    ],
    'asset_manager' => [
        'resolver_configs' => [
            'paths' => [
                '/home/georgemck/htdocs/workspaces-linket2/api-tools-skeleton/vendor/laminas-api-tools/api-tools/config/../asset'
            ]
        ]
    ],
    'api-tools' => [
        'db-connected' => []
    ],
    'controllers' => [
        'aliases' => [
            'ZF\\Apigility\\Documentation\\Controller' => 'Laminas\\ApiTools\\Documentation\\Controller',
            'ZF\\OAuth2\\Controller\\Auth' => 'Laminas\\ApiTools\\OAuth2\\Controller\\Auth'
        ],
        'factories' => [
            'Laminas\\ApiTools\\Documentation\\Controller' => 'Laminas\\ApiTools\\Documentation\\ControllerFactory',
            'Laminas\\ApiTools\\OAuth2\\Controller\\Auth' => 'Laminas\\ApiTools\\OAuth2\\Factory\\AuthControllerFactory',
            'Application\\Controller\\IndexController' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'linket_service\\V1\\Rpc\\Ping\\Controller' => 'linket_service\\V1\\Rpc\\Ping\\PingControllerFactory'
        ],
        'abstract_factories' => [
            'Laminas\\ApiTools\\Rest\\Factory\\RestControllerFactory',
            'Laminas\\ApiTools\\Rpc\\Factory\\RpcControllerFactory'
        ]
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'Laminas\\ApiTools\\Documentation\\Controller' => 'Documentation',
            'Laminas\\ApiTools\\OAuth2\\Controller\\Auth' => [
                'Laminas\\ApiTools\\ContentNegotiation\\JsonModel' => [
                    'application/json',
                    'application/*+json'
                ],
                'Laminas\\View\\Model\\ViewModel' => [
                    'text/html',
                    'application/xhtml+xml'
                ]
            ],
            'linket_service\\V1\\Rpc\\Ping\\Controller' => 'Json'
        ],
        'accept_whitelist' => [
            'Laminas\\ApiTools\\Documentation\\Controller' => [
                'application/vnd.swagger+json',
                'application/json'
            ],
            'linket_service\\V1\\Rpc\\Ping\\Controller' => [
                'application/vnd.linket_service.v1+json',
                'application/json',
                'application/*+json'
            ]
        ],
        'selectors' => [
            'Documentation' => [
                'Laminas\\View\\Model\\ViewModel' => [
                    'text/html',
                    'application/xhtml+xml'
                ],
                'Laminas\\ApiTools\\Documentation\\JsonModel' => [
                    'application/json'
                ]
            ],
            'HalJson' => [
                'Laminas\\ApiTools\\Hal\\View\\HalJsonModel' => [
                    'application/json',
                    'application/*+json'
                ]
            ],
            'Json' => [
                'Laminas\\ApiTools\\ContentNegotiation\\JsonModel' => [
                    'application/json',
                    'application/*+json'
                ]
            ]
        ],
        'content_type_whitelist' => [
            'linket_service\\V1\\Rpc\\Ping\\Controller' => [
                'application/vnd.linket_service.v1+json',
                'application/json'
            ]
        ],
        'x_http_method_override_enabled' => false,
        'http_override_methods' => []
    ],
    'view_helpers' => [
        'aliases' => [
            'agacceptheaders' => 'Laminas\\ApiTools\\Documentation\\View\\AgAcceptHeaders',
            'agAcceptHeaders' => 'Laminas\\ApiTools\\Documentation\\View\\AgAcceptHeaders',
            'agcontenttypeheaders' => 'Laminas\\ApiTools\\Documentation\\View\\AgContentTypeHeaders',
            'agContentTypeHeaders' => 'Laminas\\ApiTools\\Documentation\\View\\AgContentTypeHeaders',
            'agservicepath' => 'Laminas\\ApiTools\\Documentation\\View\\AgServicePath',
            'agServicePath' => 'Laminas\\ApiTools\\Documentation\\View\\AgServicePath',
            'agstatuscodes' => 'Laminas\\ApiTools\\Documentation\\View\\AgStatusCodes',
            'agStatusCodes' => 'Laminas\\ApiTools\\Documentation\\View\\AgStatusCodes',
            'agtransformdescription' => 'Laminas\\ApiTools\\Documentation\\View\\AgTransformDescription',
            'agTransformDescription' => 'Laminas\\ApiTools\\Documentation\\View\\AgTransformDescription',
            'ZF\\Apigility\\Documentation\\View\\AgAcceptHeaders' => 'Laminas\\ApiTools\\Documentation\\View\\AgAcceptHeaders',
            'ZF\\Apigility\\Documentation\\View\\AgContentTypeHeaders' => 'Laminas\\ApiTools\\Documentation\\View\\AgContentTypeHeaders',
            'ZF\\Apigility\\Documentation\\View\\AgServicePath' => 'Laminas\\ApiTools\\Documentation\\View\\AgServicePath',
            'ZF\\Apigility\\Documentation\\View\\AgStatusCodes' => 'Laminas\\ApiTools\\Documentation\\View\\AgStatusCodes',
            'ZF\\Apigility\\Documentation\\View\\AgTransformDescription' => 'Laminas\\ApiTools\\Documentation\\View\\AgTransformDescription'
        ],
        'factories' => [
            'Laminas\\ApiTools\\Documentation\\View\\AgAcceptHeaders' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\ApiTools\\Documentation\\View\\AgContentTypeHeaders' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\ApiTools\\Documentation\\View\\AgServicePath' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\ApiTools\\Documentation\\View\\AgStatusCodes' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\ApiTools\\Documentation\\View\\AgTransformDescription' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Hal' => 'Laminas\\ApiTools\\Hal\\Factory\\HalViewHelperFactory'
        ]
    ],
    'view_manager' => [
        'template_path_stack' => [
            '/home/georgemck/htdocs/workspaces-linket2/api-tools-skeleton/vendor/laminas-api-tools/api-tools-documentation/config/../view',
            '/home/georgemck/htdocs/workspaces-linket2/api-tools-skeleton/vendor/laminas-api-tools/api-tools-oauth2/config/../view',
            '/home/georgemck/htdocs/workspaces-linket2/api-tools-skeleton/module/Application/config/../view'
        ],
        'display_exceptions' => true,
        'template_map' => [
            'oauth/authorize' => '/home/georgemck/htdocs/workspaces-linket2/api-tools-skeleton/vendor/laminas-api-tools/api-tools-oauth2/config/../view/laminas/auth/authorize.phtml',
            'oauth/receive-code' => '/home/georgemck/htdocs/workspaces-linket2/api-tools-skeleton/vendor/laminas-api-tools/api-tools-oauth2/config/../view/laminas/auth/receive-code.phtml',
            'layout/layout' => '/home/georgemck/htdocs/workspaces-linket2/api-tools-skeleton/module/Application/config/../view/layout/layout.phtml',
            'application/index/index' => '/home/georgemck/htdocs/workspaces-linket2/api-tools-skeleton/module/Application/config/../view/application/index/index.phtml',
            'error/404' => '/home/georgemck/htdocs/workspaces-linket2/api-tools-skeleton/module/Application/config/../view/error/404.phtml',
            'error/index' => '/home/georgemck/htdocs/workspaces-linket2/api-tools-skeleton/module/Application/config/../view/error/index.phtml'
        ],
        'display_not_found_reason' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'strategies' => [
            'ViewJsonStrategy'
        ]
    ],
    'api-tools-api-problem' => [],
    'api-tools-configuration' => [
        'config_file' => 'config/autoload/development.php'
    ],
    'api-tools-oauth2' => [
        'grant_types' => [
            'client_credentials' => true,
            'authorization_code' => true,
            'password' => true,
            'refresh_token' => true,
            'jwt' => true
        ],
        'api_problem_error_response' => true
    ],
    'controller_plugins' => [
        'aliases' => [
            'getidentity' => 'Laminas\\ApiTools\\MvcAuth\\Identity\\IdentityPlugin',
            'getIdentity' => 'Laminas\\ApiTools\\MvcAuth\\Identity\\IdentityPlugin',
            'ZF\\MvcAuth\\Identity\\IdentityPlugin' => 'Laminas\\ApiTools\\MvcAuth\\Identity\\IdentityPlugin',
            'routeParam' => 'Laminas\\ApiTools\\ContentNegotiation\\ControllerPlugin\\RouteParam',
            'queryParam' => 'Laminas\\ApiTools\\ContentNegotiation\\ControllerPlugin\\QueryParam',
            'bodyParam' => 'Laminas\\ApiTools\\ContentNegotiation\\ControllerPlugin\\BodyParam',
            'routeParams' => 'Laminas\\ApiTools\\ContentNegotiation\\ControllerPlugin\\RouteParams',
            'queryParams' => 'Laminas\\ApiTools\\ContentNegotiation\\ControllerPlugin\\QueryParams',
            'bodyParams' => 'Laminas\\ApiTools\\ContentNegotiation\\ControllerPlugin\\BodyParams',
            'getinputfilter' => 'Laminas\\ApiTools\\ContentValidation\\InputFilter\\InputFilterPlugin',
            'getInputfilter' => 'Laminas\\ApiTools\\ContentValidation\\InputFilter\\InputFilterPlugin',
            'getInputFilter' => 'Laminas\\ApiTools\\ContentValidation\\InputFilter\\InputFilterPlugin',
            'ZF\\ContentValidation\\InputFilter\\InputFilterPlugin' => 'Laminas\\ApiTools\\ContentValidation\\InputFilter\\InputFilterPlugin'
        ],
        'factories' => [
            'Laminas\\ApiTools\\MvcAuth\\Identity\\IdentityPlugin' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Hal' => 'Laminas\\ApiTools\\Hal\\Factory\\HalControllerPluginFactory',
            'Laminas\\ApiTools\\ContentNegotiation\\ControllerPlugin\\RouteParam' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\ApiTools\\ContentNegotiation\\ControllerPlugin\\QueryParam' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\ApiTools\\ContentNegotiation\\ControllerPlugin\\BodyParam' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\ApiTools\\ContentNegotiation\\ControllerPlugin\\RouteParams' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\ApiTools\\ContentNegotiation\\ControllerPlugin\\QueryParams' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\ApiTools\\ContentNegotiation\\ControllerPlugin\\BodyParams' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\ApiTools\\ContentValidation\\InputFilter\\InputFilterPlugin' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory'
        ]
    ],
    'api-tools-mvc-auth' => [
        'authentication' => [],
        'authorization' => [
            'deny_by_default' => false
        ]
    ],
    'api-tools-hal' => [
        'renderer' => [],
        'metadata_map' => [],
        'options' => [
            'use_proxy' => false
        ]
    ],
    'filters' => [
        'factories' => [
            'Laminas\\Filter\\File\\RenameUpload' => 'Laminas\\ApiTools\\ContentNegotiation\\Factory\\RenameUploadFilterFactory',
            'laminasfilterfilerenameupload' => 'Laminas\\ApiTools\\ContentNegotiation\\Factory\\RenameUploadFilterFactory'
        ]
    ],
    'validators' => [
        'factories' => [
            'Laminas\\Validator\\File\\UploadFile' => 'Laminas\\ApiTools\\ContentNegotiation\\Factory\\UploadFileValidatorFactory',
            'laminasvalidatorfileuploadfile' => 'Laminas\\ApiTools\\ContentNegotiation\\Factory\\UploadFileValidatorFactory',
            'Laminas\\ApiTools\\ContentValidation\\Validator\\DbRecordExists' => 'Laminas\\ApiTools\\ContentValidation\\Validator\\Db\\RecordExistsFactory',
            'Laminas\\ApiTools\\ContentValidation\\Validator\\DbNoRecordExists' => 'Laminas\\ApiTools\\ContentValidation\\Validator\\Db\\NoRecordExistsFactory'
        ]
    ],
    'input_filter_specs' => [
        'linket_service\\V1\\Rpc\\Ping\\Validator' => [
            [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'ack'
            ]
        ]
    ],
    'api-tools-content-validation' => [
        'methods_without_bodies' => [],
        'linket_service\\V1\\Rpc\\Ping\\Controller' => [
            'input_filter' => 'linket_service\\V1\\Rpc\\Ping\\Validator'
        ]
    ],
    'api-tools-rest' => [],
    'api-tools-rpc' => [
        'linket_service\\V1\\Rpc\\Ping\\Controller' => [
            'service_name' => 'Ping',
            'http_methods' => [
                'GET'
            ],
            'route_name' => 'linket_service.rpc.ping'
        ]
    ],
    'api-tools-versioning' => [
        'content-type' => [],
        'default_version' => 1,
        'uri' => [
            'linket_service.rpc.ping'
        ]
    ],
    'db' => [
        'adapters' => [
            'dummy' => []
        ]
    ]
];
