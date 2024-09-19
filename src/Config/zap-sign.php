<?php

return [
    /**
     * The environment of the zap sign | SANDBOX or PRODUCTION
     */
    'zap-sign-environment' => env('ZAP_SIGN_ENVIRONMENT', 'SANDBOX'),

    /**
     * The authentication type of the zap sign | STATIC or JWT
     */
    'zap-sign-authentication-type' => env('ZAP_SIGN_AUTHENTICATION_TYPE', 'STATIC'),

    /**
     * Token if authentication is static
     */
    'zap-sign-token' => env('ZAP_SIGN_TOKEN', ''),

    /**
     * Username if authentication is JWT
     */
    'zap-sign-username' => env('ZAP_SIGN_USERNAME', 'SANDBOX'),

    /**
     * Password if authentication is JWT
     */
    'zap-sign-password' => env('ZAP_SIGN_PASSWORD', 'SANDBOX'),

    /**
     * Id organization if authentication is JWT
     */
    'zap-sign-id-organization' => env('ZAP_SIGN_ID_ORGANIZATION', ''),
];
