<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Authentication;

class TokenData
{
    /**
     *  The access token. Required for REST call authentication.
     * @var string
     */
    public $accessToken;

    /**
     *  The token type. The token type is Bearer.
     * @var string
     */
    public $tokenType;

    /**
     *  The expiration time in seconds that the access token is valid for
     * @var integer
     */
    public $expiresIn;

    /**
     *  The refresh token. Required for refreshing the access token.
     * @var string
     */
    public $refreshToken;

}
