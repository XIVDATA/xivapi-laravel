<?php

namespace XIVAPI\Common;

/**
 * Set environment variables
 */
class Environment
{
    const XIVAPI_KEY = config('xivapi.key');

    public function key(string $key):  Environment
    {
        putenv(self::XIVAPI_KEY .'='. $key);
        return $this;
    }
}
