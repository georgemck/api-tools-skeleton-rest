<?php

namespace linketservice\V1\Rpc\LS2;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\ApiTools\ContentNegotiation\ViewModel;

class LS2Controller extends AbstractActionController
{
    public function lS2Action()
    {
        return new ViewModel([
            'name' => "time"
        ]);
    }
}
