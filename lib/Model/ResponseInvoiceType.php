<?php

namespace SatSandboxClientPhp\Client\Model;
use \SatSandboxClientPhp\Client\ObjectSerializer;

class ResponseInvoiceType
{
    
    const I = 'I';
    const E = 'E';
    const P = 'P';
    const N = 'N';
    const T = 'T';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::I,
            self::E,
            self::P,
            self::N,
            self::T,
        ];
    }
}
