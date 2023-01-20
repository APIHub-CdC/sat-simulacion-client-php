<?php

namespace SatSandboxClientPhp\Client\Model;
use \SatSandboxClientPhp\Client\ObjectSerializer;

class CredentialStatus
{
    
    const PENDING = 'pending';
    const VALID = 'valid';
    const INVALID = 'invalid';
    const DEACTIVATED = 'deactivated';
    const ERROR = 'error';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::VALID,
            self::INVALID,
            self::DEACTIVATED,
            self::ERROR,
        ];
    }
}
