<?php
    class Request
    {
        public static function uri()
        {
            return parse_url(TRIM($_SERVER['REQUEST_URI'],"/"),PHP_URL_PATH);
        }
    }
