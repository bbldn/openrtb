<?php

namespace BBLDN\OpenRTP\Request;

class Deal
{
    /**
     * @param list<string>|null $wseat
     * @param list<string>|null $wadomain
     */
    public function __construct(
        public string $id,
        public int|null $at = null,
        public float|null $flr = null,
        public array|null $wseat = null,
        public string|null $flrcur = 'USD',
        public array|null $wadomain = null,
        public mixed $ext = null,
    ) {
    }
}
