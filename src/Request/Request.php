<?php

namespace BBLDN\OpenRTP\Request;

use BBLDN\AdCOM\Context\Context;

class Request
{
    /**
     * @param list<Item> $item
     * @param list<string> $cur
     * @param null|list<string> $seat
     */
    public function __construct(
        public string $id,
        public array $item,
        public int|null $at = 2,
        public int|null $test = 0,
        public int|null $wseat = 1,
        public int|null $tmax = null,
        public array|null $seat = null,
        public int|null $package = null,
        public array|null $cur = ['USD'],
        public string|null $cdata = null,
        public Source|null $source = null,
        public Context|null $context = null,
        public mixed $ext = null,
    ) {
    }
}
