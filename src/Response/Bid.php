<?php

namespace BBLDN\OpenRTP\Response;

use BBLDN\AdCOM\Media\Ad;

/**
 * id - Bidder generated bid ID to assist with logging/tracking.
 * item - ID of the item object in the related bid request; specifically item.id.
 * price - Bid price expressed as CPM although the actual transaction is for a unit item only. Note that while the type indicates float, integer math is highly recommended when handling currencies (e.g., BigDecimal in Java).
 * deal - Reference to a deal from the bid request if this bid pertains to a private marketplace deal; specifically deal.id.
 * cid - Campaign ID or other similar grouping of brand-related ads. Typically used to increase the efficiency of audit processes.
 * tactic - Tactic ID to enable buyers to label bids for reporting to the exchange the tactic through which their bid was submitted. The specific usage and meaning of the tactic ID should be communicated between buyer and exchanges beforehand.
 * purl - Pending notice URL called by the exchange when a bid has been declared the winner within the scope of an OpenRTB compliant supply chain (i.e., there may still be non-compliant decisioning such as header bidding). Substitution macros may be included.
 * burl - Billing notice URL called by the exchange when a winning bid becomes billable based on exchange-specific business policy (e.g., markup rendered). Substitution macros may be included.
 * lurl - Loss notice URL called by the exchange when a bid is known to have been lost. Substitution macros may be included. Exchange-specific policy may preclude support for loss notices or the disclosure of winning clearing prices resulting in ${OPENRTB_PRICE} macros being removed (i.e., replaced with a zero-length string).
 * exp - Advisory as to the number of seconds the buyer is willing to wait between auction and fulfilment.
 * mid - ID to enable media to be specified by reference if previously uploaded to the exchange rather than including it by value in the domain objects.
 * macro - Array of Macro objects that enable bid specific values to be substituted into markup; especially useful for previously uploaded media referenced via the mid attribute. Refer to Object: Macro.
 * media - Layer-4 domain object structure that specifies the media to be presented if the bid is won conforming to the specification and version referenced in openrtb.domainspec and openrtb.domainver. For AdCOM v1.x, the objects allowed here are "Ad" and any objects subordinate thereto as specified by AdCOM.
 * ext - Optional demand source specific extensions.
 *
 * @see https://github.com/InteractiveAdvertisingBureau/openrtb/blob/main/OpenRTB%20v3.0%20FINAL.md#object--bid-
 */
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
