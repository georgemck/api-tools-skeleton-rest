<?php
namespace linketservice\V1\Rest\Ls;

class LsResourceFactory
{
    public function __invoke($services)
    {
        return new LsResource();
    }
}
