<?php

namespace LuizFabianoNogueira\ZapSign\Lib;

use Exception;
use Illuminate\Support\Facades\Http;

class ZapSign
{
    /**
     * @var string
     */
    public string $url;

    /**
     * @var array|string[]
     */
    public array $headers = [];

    /**
     * @var string|null
     */
    public string|null $token;

    /**
     * @throws Exception
     */
    public function __construct()
    {
        if (config('zap-sign.zap-sign-environment') === 'SANDBOX') {
            $this->url = 'https://sandbox.api.zapsign.com.br/api/v1/';
        } else {
            $this->url = 'https://api.zapsign.com.br/api/v1/';
        }

        if (config('zap-sign.zap-sign-authentication-type') === 'STATIC') {
            $this->token = config('zap-sign.zap-sign-token');
        } else {
            $this->token = $this->jwtAuthentication();
        }

        $this->headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $this->token
        ];
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @throws Exception
     */
    private function jwtAuthentication() : string|null
    {
        $response = Http::post(
            $this->url . 'auth/token/'.config('zap-sign.zap-sign-id-organization'),
            [
                'username' => config('zap-sign.zap-sign-username'),
                'password' => config('zap-sign.zap-sign-password')
            ]
        );
        if ($response->getStatusCode() === 200) {
            $json = $response->json();
            return $json['access'];
        }

        throw new \RuntimeException('Error in zap-sign authentication'.$response->getStatusCode());
    }
}
