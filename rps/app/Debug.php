<?php

namespace App;

class Debug
{
    public static function dump($data)
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    }

    public static function log($data)
    {
        $file = 'log.txt';

        $data = is_array($data) ? json_encode($data) : $data;
        
        $content = '';
        if (file_exists($file)) {
            $content .= file_get_contents($file)."\n";
        }

        $content .= $data;
        
        file_put_contents($file, $content);
    }
}