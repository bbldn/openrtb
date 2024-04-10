<?php

namespace BBLDN\OpenRTP\Response;

use BBLDN\AdCOM\Media\Ad;

class Bid
{
    /**
     * @param list<Macro>|null $macro
     */
    public function __construct(
        public string $id,
        public float $price,
        public string $item,
        public int|null $exp = null,
        public Ad|null $media = null,
        public string|null $cid = null,
        public string|null $mid = null,
        public array|null $macro = null,
        public string|null $burl = null,
        public string|null $deal = null,
        public string|null $lurl = null,
        public string|null $purl = null,
        public string|null $tactic = null,
        public mixed $ext = null,
    ) {
    }
}
