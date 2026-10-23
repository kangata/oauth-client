<?php

namespace QuetzalStudio\OAuthClient\Exceptions;

use Illuminate\Auth\AuthenticationException as IlluminateAuthenticationException;
use Laravel\Passport\Exceptions\AuthenticationException as PassportAuthenticationException;

/*
 * Passport 11+ ships its own AuthenticationException (extending Illuminate's),
 * Passport 10 does not. Extend whichever is available so existing handlers keep working.
 */
if (class_exists(PassportAuthenticationException::class)) {
    class AuthenticationException extends PassportAuthenticationException
    {
    }
} else {
    class AuthenticationException extends IlluminateAuthenticationException
    {
    }
}
