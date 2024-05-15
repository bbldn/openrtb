<?php

namespace BBLDN\OpenRTP\Response;

/**
 * id - ID of the bid request to which this is a response; must match the request.id attribute.
 * bidid - Bidder generated response ID to assist with logging/tracking.
 * nbr - Reason for not bidding if applicable (see List: No-Bid Reason Codes). Note that while many exchanges prefer a simple HTTP 204 response to indicate a no-bid, responses indicating a reason code can be useful in debugging scenarios.
 * cur - Bid currency using ISO-4217 alpha codes.
 * cdata - Allows bidder to set data in the exchange’s cookie, which can be retrieved on bid requests (refer to cdata in Object: Request) if supported by the exchange. The string must be in base85 cookie-safe characters.
 * seatbid - Array of Seatbid objects; 1+ required if a bid is to be made. Refer to Object: Seatbid.
 * ext - Optional demand source specific extensions.
 *
 * @see https://github.com/InteractiveAdvertisingBureau/openrtb/blob/main/OpenRTB%20v3.0%20FINAL.md#object--response-
 */
class Response
{
    /**
     * @param list<Seatbid>|null $seatbid
     */
    public function __construct(
        public string $id,
        public int|null $nbr = null,
        public string|null $cur = 'USD',
        public string|null $bidid = null,
        public string|null $cdata = null,
        public array|null $seatbid = null,
        public mixed $ext = null,
    ) {
    }
}
