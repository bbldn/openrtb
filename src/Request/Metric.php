<?php

namespace BBLDN\OpenRTP\Request;

/**
 * type - Type of metric being presented using exchange curated string names which should be published to bidders beforehand.
 * value - Number representing the value of the metric. Probabilities must be in the range 0.0 – 1.0.
 * vendor - Source of the value using exchange curated string names which should be published to bidders beforehand. If the exchange itself is the source versus a third party, "EXCHANGE" is recommended.
 * ext - Optional exchange-specific extensions.
 *
 * @see https://github.com/InteractiveAdvertisingBureau/openrtb/blob/main/OpenRTB%20v3.0%20FINAL.md#object--metric-
 */
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
