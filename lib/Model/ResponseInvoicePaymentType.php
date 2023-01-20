<?php

namespace SatSandboxClientPhp\Client\Model;
use \SatSandboxClientPhp\Client\ObjectSerializer;

class ResponseInvoicePaymentType
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
