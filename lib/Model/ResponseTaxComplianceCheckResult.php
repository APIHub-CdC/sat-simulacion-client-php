<?php

namespace SatSandboxClientPhp\Client\Model;
use \SatSandboxClientPhp\Client\ObjectSerializer;

class ResponseTaxComplianceCheckResult
{
    
    const POSITIVE = 'positive';
    const NEGATIVE = 'negative';
    const NO_OBLIGATIONS = 'no_obligations';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::POSITIVE,
            self::NEGATIVE,
            self::NO_OBLIGATIONS,
        ];
    }
}
