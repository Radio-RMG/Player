<?php

function titre()
{
    /*récupération du son en cours*/
    $curl_init = curl_init();
    curl_setopt($curl_init, CURLOPT_URL, "http://37.187.114.170:8000/currentsong?sid=1");
    curl_setopt($curl_init, CURLOPT_HEADER, false);
    curl_setopt($curl_init, CURLOPT_RETURNTRANSFER, true);
    $titre = curl_exec($curl_init);
    curl_close($curl_init);
    return $titre;
}
