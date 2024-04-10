<?php

namespace BBLDN\OpenRTP\Enum;

enum NoBidReasonCodeEnum: int
{
    case UNKNOWN_ERROR = 0;

    case TECHNICAL_ERROR = 1;

    case INVALID_REQUEST = 2;

    case KNOWN_WEB_CRAWLER = 3;

    case SUSPECTED_NON_HUMAN_TRAFFIC = 4;

    case CLOUD_DATA_CENTER_OR_PROXY_IP = 5;

    case UNSUPPORTED_DEVICE = 6;

    case BLOCKED_PUBLISHER_OR_SITE = 7;

    case UNMATCHED_USER = 8;

    case DAILY_USER_CAP_MET = 9;

    case DAILY_DOMAIN_CAP_MET = 10;

    case ADS_TXT_AUTHORIZATION_UNAVAILABLE = 11;

    case ADS_TXT_AUTHORIZATION_VIOLATION = 12;

    case ADS_CERT_AUTHENTICATION_UNAVAILABLE = 13;

    case ADS_CERT_AUTHENTICATION_VIOLATION = 14;

    case INSUFFICIENT_AUCTION_TIME = 15;

    case INCOMPLETE_SUPPLY_CHAIN = 16;

    case BLOCKED_SUPPLYCHAIN_NODE = 17;
}
