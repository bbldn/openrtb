<?php

namespace BBLDN\OpenRTP\Request;

class SupplyChain
{
    /**
     * @param list<SupplyChainNode> $nodes
     */
    public function __construct(
        public string $ver,
        public array $nodes,
        public int|null $complete = null,
        public mixed $ext = null,
    ) {
    }
}
