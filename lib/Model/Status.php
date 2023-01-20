<?php

namespace SatSandboxClientPhp\Client\Model;
use \SatSandboxClientPhp\Client\ObjectSerializer;

class Status
{
    
    const VIGENTE = 'VIGENTE';
    const CANCELADO = 'CANCELADO';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::VIGENTE,
            self::CANCELADO,
        ];
    }
}
