<?php

namespace XIVAPI;

use GuzzleHttp\Psr7\Response;
use XIVDATA\XIVAPI\Api\Character;
use XIVDATA\XIVAPI\Api\FreeCompany;
use XIVDATA\XIVAPI\Api\Linkshell;
use XIVDATA\XIVAPI\Api\Lodestone;
use XIVDATA\XIVAPI\Api\Market;
use XIVDATA\XIVAPI\Api\PatchList;
use XIVDATA\XIVAPI\Api\PrivateApi;
use XIVDATA\XIVAPI\Api\PvPTeam;
use XIVDATA\XIVAPI\Api\Search;
use XIVDATA\XIVAPI\Api\Content;
use XIVDATA\XIVAPI\Api\Url;
use XIVDATA\XIVAPI\Common\Environment;
use XIVDATA\XIVAPI\Guzzle\Guzzle;

class XIVAPI
{
    const PROD    = 'https://xivapi.com';
    const STAGING = 'https://staging.xivapi.com';
    const DEV     = 'http://xivapi.local';
    
    /** @var Environment */
    public $environment;
    /** @var Url */
    public $url;
    /** @var Search */
    public $search;
    /** @var Content */
    public $content;
    /** @var Character */
    public $character;
    /** @var FreeCompany */
    public $freecompany;
    /** @var Linkshell */
    public $linkshell;
    /** @var PvPTeam */
    public $pvpteam;
    /** @var Lodestone */
    public $lodestone;
    /** @var Market */
    public $market;
    /** @var PatchList */
    public $patchlist;
    /** @var PrivateApi */
    public $_private;

    public function __construct(string $environment = self::PROD)
    {
        // set environment to use
        Guzzle::setEnvironment($environment);

        $this->environment  = new Environment();
        $this->url          = new Url();
        $this->search       = new Search();
        $this->content      = new Content();
        $this->character    = new Character();
        $this->freecompany  = new FreeCompany();
        $this->linkshell    = new Linkshell();
        $this->pvpteam      = new PvPTeam();
        $this->lodestone    = new Lodestone();
        $this->market       = new Market();
        $this->patchlist    = new PatchList();
        $this->_private     = new PrivateApi();
    }
    
    public function reset(): XIVAPI
    {
        Guzzle::resetQuery();
        return $this;
    }
    
    public function async(): XIVAPI
    {
        Guzzle::setAsync();
        return $this;
    }
    
    public function unwrap($results): \stdClass
    {
        $unwrapped = (Object)[];
        foreach ($results as $key => $response) {
            /** @var Response $response */
            $response = $response['value'] ?? false;
            
            if ($response) {
                $response = \GuzzleHttp\json_decode($response->getBody());
            }
            
            $unwrapped->{$key} = $response;
        }
        
        return $unwrapped;
    }

    public function queries($queries): XIVAPI
    {
        Guzzle::resetQuery();
        
        foreach ($queries as $query => $value) {
            Guzzle::setQuery($query, $value);
        }

        return $this;
    }
}
