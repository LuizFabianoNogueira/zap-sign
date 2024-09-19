<?php

namespace LuizFabianoNogueira\ZapSign\Lib;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

class Template extends ZapSign
{
    /**
     * @param int $page
     * @return array|mixed
     * @throws ConnectionException
     */
    public function list(int $page = 1): mixed
    {
        $url = $this->url . 'templates/?page='.$page;
        $response = Http::withHeaders($this->getHeaders())->get($url);
        if ($response->getStatusCode() === 200) {
            return $response->json();
        }

        throw new \RuntimeException('Error in zap-sign Template list '.$response->getStatusCode());
    }

    /**
     * @param $token
     * @return array|mixed
     * @throws ConnectionException
     */
    public function detailModel($token)
    {
        $url = $this->url . 'templates/'.$token;
        $response = Http::withHeaders($this->getHeaders())->get($url);
        if ($response->getStatusCode() === 200) {
            return $response->json();
        }

        throw new \RuntimeException('Error in zap-sign Template detailModel '.$response->getStatusCode());
    }
}
