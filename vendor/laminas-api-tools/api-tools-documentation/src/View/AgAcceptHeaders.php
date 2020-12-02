<?php

/**
 * @see       https://github.com/laminas-api-tools/api-tools-documentation for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/api-tools-documentation/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/api-tools-documentation/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\ApiTools\Documentation\View;

use Laminas\ApiTools\Documentation\Service;
use Laminas\View\Helper\AbstractHelper;

class AgAcceptHeaders extends AbstractHelper
{
    /**
     * Render a list group of Accept headers composed by the service
     *
     * @param  Service $service
     * @return string
     */
    public function __invoke(Service $service)
    {
        $requestAcceptTypes = $service->getRequestAcceptTypes();
        if (empty($requestAcceptTypes)) {
            $requestAcceptTypes = [];
        }

        $view = $this->getView();
        $types = array_map(function ($type) use ($view) {
            return sprintf('<div class="list-group-item">%s</div>', $view->escapeHtml($type));
        }, $requestAcceptTypes);
        return implode("\n", $types);
    }
}
