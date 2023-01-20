<?php

namespace SatSandboxClientPhp\Client\Model;
use \SatSandboxClientPhp\Client\ObjectSerializer;

class PaymentType
{
    
    const PUE = 'PUE';
    const PPD = 'PPD';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::PUE,
            self::PPD,
        ];
    }
}
