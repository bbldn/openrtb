<?php

namespace BBLDN\OpenRTP\Request;

/**
 * id - A unique identifier for the deal.
 * flr - Minimum deal price for this item expressed in CPM.
 * flrcur - Currency of the flr attribute specified using ISO-4217 alpha codes.
 * at - Optional override of the overall auction type of the request, where 1 = First Price, 2 = Second Price Plus, 3 = the value passed in flr is the agreed upon deal price. Additional auction types can be defined by the exchange using 500+ values.
 * wseat - Allow list of buyer seats allowed to bid on this deal. IDs of seats and the buyer’s customers to which they refer must be coordinated between bidders and the exchange beforehand. Omission implies no restrictions.
 * wadomain - Array of advertiser domains (e.g., advertiser.com) allowed to bid on this deal. Omission implies no restrictions.
 * ext - Optional exchange-specific extensions.
 *
 * @see https://github.com/InteractiveAdvertisingBureau/openrtb/blob/main/OpenRTB%20v3.0%20FINAL.md#object--deal-
 */
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
