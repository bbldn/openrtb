<?php

namespace BBLDN\OpenRTP\Response;

/**
 * key - Name of a buyer specific macro.
 * value - Value to substitute for each instance of the macro found in markup.
 * ext - Optional demand source specific extensions.
 *
 * @see https://github.com/InteractiveAdvertisingBureau/openrtb/blob/main/OpenRTB%20v3.0%20FINAL.md#object--macro-
 */
class Macro
{
    public function __construct(
        public string $key,
        public string|null $value = null,
        public mixed $ext = null,
    ) {
    }
}
