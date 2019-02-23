<?php
    function curl($url) {
        
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
            $data = curl_exec($ch);
            curl_close($ch);

            return $data;
        } 
if  (isset ($_GET['city'])) {
        error_reporting(0);
        $urlContents = curl("https://samples.openweathermap.org/data/2.5/weather?q=".$_GET['city']."&appid=b6907d289e10d714a6e88b30761fae22");
        
        $weatherArray = json_decode($urlContents, true);
        
        $weather = "The weather in ".$_GET['city']." is currently ".$weatherArray['weather'][0]['description'].".";
        
        $tempInFahrenheit = intval($weatherArray['main']['temp']* 9/5 - 459.67);
        
        $speedInMPH = intval($weatherArray['wind']['speed']*2.24);
        
        $weather .=" The temperature is ".$tempInFahrenheit."&deg; F with a wind speed of ".$speedInMPH." MPH.";
        
        
    }
?>
