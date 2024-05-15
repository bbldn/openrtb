<?php

namespace BBLDN\OpenRTP\Response;

/**
 * seat - ID of the buyer seat on whose behalf this bid is made.
 * package - For offers with multiple items, this flag Indicates if the bidder is willing to accept wins on a subset of bids or requires the full group as a package, where 0 = individual wins accepted; 1 = package win or loss only.
 * bid - Array of 1+ Bid objects each related to an item. Multiple bids can relate to the same item. Refer to Object: Bid.
 * ext - Optional demand source specific extensions.
 *
 * @see https://github.com/InteractiveAdvertisingBureau/openrtb/blob/main/OpenRTB%20v3.0%20FINAL.md#object--seatbid-
 */
class Seatbid
{
    /**
     * @param list<Bid> $bid
     */
    public function __construct(
        public array $bid,
        public int|null $package = 0,
        public string|null $seat = null,
        public mixed $ext = null,
    ) {
    }
}
