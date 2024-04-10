<?php

namespace BBLDN\OpenRTP\Request;

class SupplyChainNode
{
    public function __construct(
        public int $hp,
        public string $asi,
        public string $sid,
        public string|null $rid = null,
        public string|null $name = null,
        public string|null $domain = null,
        public mixed $ext = null,
    ) {
    }
}
