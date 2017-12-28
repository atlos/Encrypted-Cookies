<?php

namespace Rosio\EncryptedCookie\StorageSystem;

class CookieArrayStorageSystem implements iStorageSystem
{
	public function get ($name)
	{
		return $_COOKIE[$name];
	}

	public function has ($name)
	{
		return isset($_COOKIE[$name]);
	}

	public function set ($name, $data, $expiration, $domain, $path, $isSecure, $isHttpOnly)
	{
        setcookie($name, $data, $expiration, $path, $domain, $isSecure, $isHttpOnly);
        $_COOKIE[$name] = $data;
	}
}