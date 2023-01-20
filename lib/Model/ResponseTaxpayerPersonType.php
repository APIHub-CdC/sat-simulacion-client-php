<?php

namespace SatSandboxClientPhp\Client\Model;
use \SatSandboxClientPhp\Client\ObjectSerializer;

class ResponseTaxpayerPersonType
{
    
    const PHYSICAL = 'physical';
    const LEGAL = 'legal';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::PHYSICAL,
            self::LEGAL,
        ];
    }
}
