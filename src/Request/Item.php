<?php

namespace BBLDN\OpenRTP\Request;

use BBLDN\AdCOM\Placement\Placement;

class Item
{
    /**
     * @param list<Deal>|null $deal
     * @param list<Metric>|null $metric
     */
    public function __construct(
        public string $id,
        public Placement $spec,
        public int|null $qty = 1,
        public int|null $dlvy = 0,
        public int|null $dt = null,
        public int|null $exp = null,
        public int|null $seq = null,
        public int|null $private = 0,
        public float|null $flr = null,
        public array|null $deal = null,
        public array|null $metric = null,
        public float|null $qtyflt = null,
        public string|null $flrcur = 'USD',
        public mixed $ext = null,
    ) {
    }
}
