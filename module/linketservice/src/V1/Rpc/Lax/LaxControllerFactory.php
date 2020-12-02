<?php
namespace linketservice\V1\Rpc\Lax;

class LaxControllerFactory
{
    public function __invoke($controllers)
    {
        return new LaxController();
    }
}
