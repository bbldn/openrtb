<?php

namespace BBLDN\OpenRTP\Response;

class Macro
{
    public function __construct(
        public string $key,
        public string|null $value = null,
        public mixed $ext = null,
    ) {
    }
}
