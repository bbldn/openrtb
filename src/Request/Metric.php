<?php

namespace BBLDN\OpenRTP\Request;

class Metric
{
    public function __construct(
        public float $value,
        public string $type,
        public string|null $vendor = null,
        public mixed $ext = null,
    ) {
    }
}
