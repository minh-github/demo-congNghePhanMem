<?php

class Route{
    public function handelRoute($url)
    {
        global $routes;
        $newUrl = trim($url, '/');

        foreach($routes as $key=>$value){
            if (preg_match('~' . $key . '~is', $url)){ {
                $newUrl = preg_replace('~'.$key.'~is', $value,$url);
            }
            }
        }
        return $newUrl;
    }
}