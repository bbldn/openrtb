<?php

namespace BBLDN\OpenRTP\Response;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/openrtb/blob/main/OpenRTB%20v3.0%20FINAL.md#object--macro-
 */
class Macro
{
    /**
     * @param mixed $ext Optional demand source specific extensions.
     * @param string $key Name of a buyer specific macro.
     * @param string|null $value Value to substitute for each instance of the macro found in markup.
     */
    public function __construct(
        public string $key,
        public string|null $value = null,
        public mixed $ext = null,
    ) {
    }
}
