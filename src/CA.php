<?php

namespace Kuredev;

//require_once 'vendor/autoload.php';

class CA extends \wrapi\wrapi{
    const BASEURL = 'https://manager.cloudautomator.com/api/v1/';
    public function __construct(string $accessToken){
        $opts = array(
            "headers" => array(
                "Authorization" => "Bearer ".$accessToken,
                "Content-Type" => "application/json"
            )
        );
        $json = file_get_contents(__DIR__ . "/api.json");
        $endpoints = json_decode($json, true);
        parent::__construct(self::BASEURL, $endpoints, $opts);
    }
}

