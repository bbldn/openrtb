<?php

namespace BBLDN\OpenRTP\Response;

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
