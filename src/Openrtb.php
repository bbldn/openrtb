<?php

namespace BBLDN\OpenRTP;

use BBLDN\OpenRTP\Request\Request;
use BBLDN\OpenRTP\Response\Response;

/**
 * ver - Version of the Layer-3 OpenRTB specification (e.g., "3.0").
 * domainspec - Identifier of the Layer-4 domain model used to define items for sale, media associated with bids, etc.
 * domainver - Specification version of the Layer-4 domain model referenced in the domainspec attribute.
 * request - Bid request container. * Required only for request payloads. Refer to Object: Request.
 * response - Bid response container. * Required only for response payloads. Refer to Object: Response.
 *
 * @see https://github.com/InteractiveAdvertisingBureau/openrtb/blob/main/OpenRTB%20v3.0%20FINAL.md#object--openrtb-
 */
class Openrtb
{
    public function __construct(
        public string $domainver = '1.0',
        public string|null $ver = '3.0',
        public Request|null $request = null,
        public Response|null $response = null,
        public string|null $domainspec = 'adcom',
    ) {
    }
}
