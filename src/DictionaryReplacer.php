<?php

namespace App;

class DictionaryReplacer
{
    public static function replace(string $text, array $dictionary): string
    {
        foreach($dictionary as $needle => $replace) {
            $text = str_replace('\$'.$needle.'\$', $replace, $text);
        }

        return $text;
    }
}