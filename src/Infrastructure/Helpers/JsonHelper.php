<?php

namespace App\Infrastructure\Helpers;

class JsonHelper
{
    public function __construct()
    {
    }

    public static function jsonDecode(bool|string $data, $assoc = false)
    {
        $maxLength = strlen((string)PHP_INT_MAX) - 1;
        $content = preg_replace('/:\s*(-?\d{' . $maxLength . ',})([,\]}])/', ': "$1"$2', $data);

        $json = json_decode($content, $assoc, 512, 2 | 256 | 64 | 32);
        if (null === $json) {
            $json = json_decode($data, $assoc, 512, 2 | 256 | 64 | 32);
        }
        return $json;
    }

    public static function jsonEncode($data): string|bool
    {
        return json_encode($data);
    }
}
