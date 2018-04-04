<?php

namespace ChromeDriver;

class Environment
{
    public static function set()
    {
        if (PHP_OS === 'WINNT' || strpos(php_uname(), 'Microsoft') !== false) {
            $driver = 'chromedriver-win';
        }
        else if (PHP_OS === 'Darwin') {
            $driver = 'chromedriver-mac';
        }
        else {
            $driver = 'chromedriver-linux';
        }

        return putenv('webdriver.chrome.driver=' . realpath('../bin/' . $driver));
    }
}