<?php

/**
 * @see       https://github.com/laminas-api-tools/api-tools-documentation for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/api-tools-documentation/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/api-tools-documentation/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\ApiTools\Documentation;

use Laminas\ApiTools\ContentNegotiation\ViewModel;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Helper\BasePath;
use Laminas\View\Helper\ServerUrl;

class Controller extends AbstractActionController
{
    /**
     * @var ApiFactory
     */
    protected $apiFactory;

    /**
     * @var ServerUrl
     */
    protected $serverUrlViewHelper;

    /**
     * @var BasePath|null
     */
    private $basePath;

    /**
     * @param ApiFactory $apiFactory
     * @param ServerUrl $serverUrlViewHelper
     * @param BasePath $basePath
     */
    public function __construct(ApiFactory $apiFactory, ServerUrl $serverUrlViewHelper, BasePath $basePath = null)
    {
        $this->apiFactory = $apiFactory;
        $this->serverUrlViewHelper = $serverUrlViewHelper;
        $this->basePath = $basePath;
    }

    /**
     * Show/return documentation
     *
     * Returns a ContentNegotiation view model to allow for multiple
     * representations of documentation.
     *
     * @return ViewModel
     */
    public function showAction()
    {
        $basePath = $this->basePath ? $this->basePath->__invoke() : null;

        $apiName = $this->normalizeApiName($this->params()->fromRoute('api'));
        $apiVersion = $this->params()->fromRoute('version', '1');
        $serviceName = $this->params()->fromRoute('service');

        $viewModel = new ViewModel();
        $viewModel->setTemplate('api-tools-documentation/show');
        $viewModel->setVariable('baseUrl', $this->serverUrlViewHelper->__invoke($basePath));

        if (! $apiName) {
            $apiList = $this->apiFactory->createApiList();
            $viewModel->setVariable('apis', $apiList);
            $viewModel->setVariable('type', 'apiList');
            return $viewModel;
        }

        $api = $this->apiFactory->createApi($apiName, $apiVersion);

        if (! $serviceName) {
            $viewModel->setVariable('documentation', $api);
            $viewModel->setVariable('type', 'api');
            return $viewModel;
        }

        $service = $this->apiFactory->createService($api, $serviceName);
        $viewModel->setVariable('documentation', $service);
        $viewModel->setVariable('type', 'service');
        return $viewModel;
    }

    /**
     * @param $name
     * @return mixed
     */
    protected function normalizeApiName($name)
    {
        return str_replace('.', '\\', $name);
    }
}
