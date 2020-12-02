<?php
namespace linketservice\V1\Rpc\LS2;

class LS2ControllerFactory
{
    public function __invoke($controllers)
    {
        return new LS2Controller();
    }
}
