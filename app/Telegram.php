<?php

function makeHTTPRequest($key,$method,$datas=[])
{
    $url = "https://api.telegram.org/bot".$key."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
    $res = curl_exec($ch);
    if(curl_error($ch))
    {
        var_dump(curl_error($ch));
    }else
    {
        return json_decode($res);
    }
}

function makeHTTPRequestFile($key,$method,$filePath,$datas=[])
{
    $url = "https://api.telegram.org/bot".$key."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
    $res = curl_exec($ch);
    if(curl_error($ch))
    {
        var_dump(curl_error($ch));
    }else
    {
        return json_decode($res);
    }
}