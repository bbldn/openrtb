<?php

namespace BBLDN\OpenRTP\Response;

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
