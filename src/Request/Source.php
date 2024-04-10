<?php

namespace BBLDN\OpenRTP\Request;

class Source
{
    public function __construct(
        public int|null $ts = null,
        public string|null $ds = null,
        public string|null $tid = null,
        public string|null $cert = null,
        public string|null $dsmap = null,
        public string|null $digest = null,
        public string|null $pchain = null,
        public SupplyChain|null $schain = null,
        public mixed $ext = null,
    ) {
    }
}
