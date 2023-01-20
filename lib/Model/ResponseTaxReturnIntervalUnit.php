<?php

namespace SatSandboxClientPhp\Client\Model;
use \SatSandboxClientPhp\Client\ObjectSerializer;

class ResponseTaxReturnIntervalUnit
{
    
    const ANUAL = 'Anual';
    const MENSUAL = 'Mensual';
    const RIF = 'RIF';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::ANUAL,
            self::MENSUAL,
            self::RIF,
        ];
    }
}
