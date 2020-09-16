<?php

namespace XIVAPI;

use GuzzleHttp\RequestOptions;
use XIVAPI\Guzzle\Guzzle;


class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function character(int $id, array $data = [], bool $extended = false)
    {
        $options = [
            RequestOptions::QUERY
        ];

        if ($data) {
            $options[RequestOptions::QUERY]['data'] = implode(",", $data);
        }

        if ($extended) {
            $options[RequestOptions::QUERY]['extended'] = 1;
        }

        return Guzzle::get("/character/{$id}", $options);
    }
}