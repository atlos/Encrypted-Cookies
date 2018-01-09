<?php

namespace Rosio\EncryptedCookie\StorageSystem;

class CookieArrayStorageSystem implements iStorageSystem
{

    /**
     * 
     * @param string $name
     * @return string
     */
    public function get($name)
    {
        return $_COOKIE[$name];
    }

    /**
     * 
     * @param string $name
     * @return bool
     */
    public function has($name)
    {
        return isset($_COOKIE[$name]);
    }

    /**
     * 
     * @param string $name
     * @param mixed $data
     * @param int $expiration
     * @param string $domain
     * @param string $path
     * @param bool $isSecure
     * @param bool $isHttpOnly
     */
    public function set($name, $data, $expiration, $domain, $path, $isSecure, $isHttpOnly)
    {
        setcookie($name, $data, $expiration, $path, $domain, $isSecure, $isHttpOnly);
        $_COOKIE[$name] = $data;
    }
}
