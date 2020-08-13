<?php

namespace Snono\Socialite\Two;

use Exception;
use Illuminate\Support\Arr;

class PassportProvider extends AbstractProvider implements ProviderInterface
{
    /**
     * The scopes being requested.
     *
     * @var array
     */
    protected $scopes = ['*'];
    private $url = 'http://localhost:8000';

    /**
     * {@inheritdoc}
     */
    protected function getAuthUrl($state)
    {
        return $this->buildAuthUrlFromBase($this->url.'/oauth/authorize', $state);
    }

    /**
     * {@inheritdoc}
     */
    protected function getTokenUrl()
    {
        return $this->url.'/oauth/token';
    }

    /**
     * {@inheritdoc}
     */

    /**
     * Get the POST fields for the token request.
     *
     * @param  string  $code
     * @return array
     */
    protected function getTokenFields($code)
    {
        
        return [
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'code' => $code,
            'redirect_uri' => $this->redirectUrl,
            'grant_type' => 'authorization_code',
        ];
    }
    protected function getUserByToken($token)
    {
        $userUrl = $this->url.'/api/user';

        $response = $this->getHttpClient()->get(
            $userUrl, $this->getRequestOptions($token)
        );

        $user = json_decode($response->getBody(), true);

        if (in_array('user:email', $this->scopes)) {
            $user['email'] = $this->getEmailByToken($token);
        }

        return $user;
    }

    /**
     * Get the email for the given access token.
     *
     * @param  string  $token
     * @return string|null
     */
    protected function getEmailByToken($token)
    {
        $emailsUrl = $this->url.'/api/user/emails';

        try {
            $response = $this->getHttpClient()->get(
                $emailsUrl, $this->getRequestOptions($token)
            );
        } catch (Exception $e) {
            return;
        }

        foreach (json_decode($response->getBody(), true) as $email) {
            if ($email['primary'] && $email['verified']) {
                return $email['email'];
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function mapUserToObject(array $user)
    {
        return (new User)->setRaw($user)->map([
            'id' => $user['id'],
            'name' => Arr::get($user, 'name'),
            'email' => Arr::get($user, 'email'),
        ]);
    }

    /**
     * Get the default options for an HTTP request.
     *
     * @param string $token
     * @return array
     */
    protected function getRequestOptions($token)
    {
        return [
            'headers' => [
                'Authorization' => 'Bearer '.$token,
            ],
        ];
    }
}
