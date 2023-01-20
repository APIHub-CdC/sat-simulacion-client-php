<?php

namespace SatSandboxClientPhp\Client\Model;
use \SatSandboxClientPhp\Client\ObjectSerializer;

class ReceiverBlacklistStatus
{
    
    const PRESUMED = 'presumed';
    const DISMISSED = 'dismissed';
    const DEFINITIVE = 'definitive';
    const FAVORABLE = 'favorable';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::PRESUMED,
            self::DISMISSED,
            self::DEFINITIVE,
            self::FAVORABLE,
        ];
    }
}
