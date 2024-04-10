<?php

namespace BBLDN\OpenRTP;

use BBLDN\OpenRTP\Request\Request;
use BBLDN\OpenRTP\Response\Response;

class Openrtb
{
    public function __construct(
        public string $domainver = '1.0',
        public string|null $ver = '3.0',
        public Request|null $request = null,
        public Response|null $response = null,
        public string|null $domainspec = 'adcom',
    ) {
    }
}
