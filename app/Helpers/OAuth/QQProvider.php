<?php

namespace App\Api\Helpers\OAuth;
use Laravel\Socialite\Two\AbstractProvider;
use Laravel\Socialite\Two\ProviderInterface;
use Laravel\Socialite\Two\User;

class QQProvider extends AbstractProvider implements ProviderInterface
{
    /**
     * @var string
     */
    private $openId;


    protected $scopes = ['get_user_info'];


    protected function getTokenUrl()
    {

        return 'https://graph.qq.com/oauth2.0/token';
    }

    protected function mapUserToObject(array $user)
    {

        return (new User())->setRaw($user)->map([
            'id' => $this->openId,
            'nickname' => $user['nickname'],
            'name' => null,
            'email' => null,
            'avatar' => $user['figureurl_qq_2'],
            'gender' => $user['gender']
        ]);

    }

    /**
     * {@inheritdoc}.
     *
     * @see \Laravel\Socialite\Two\AbstractProvider::getTokenFields()
     */
    protected function getTokenFields($code)
    {

        return array_merge(parent::getTokenFields($code), [
            'grant_type' => 'authorization_code',
        ]);
    }

    /**
     * {@inheritdoc}.
     *
     * @see \Laravel\Socialite\Two\AbstractProvider::getAccessToken()
     */
    public function getAccessTokenResponse($code)
    {

        $response = $this->getHttpClient()->get($this->getTokenUrl(), [
            'query' => $this->getTokenFields($code),
        ]);

        $content = $response->getBody()->getContents();

        parse_str($content, $result);
        return $result;
    }

    protected function getUserByToken($token)
    {

        $response = $this->getHttpClient()->get('https://graph.qq.com/oauth2.0/me?access_token='.$token);

        $this->openId = json_decode($this->removeCallback($response->getBody()->getContents()), true)['openid'];

        $response = $this->getHttpClient()->get(
            "https://graph.qq.com/user/get_user_info?access_token=$token&openid={$this->openId}&oauth_consumer_key={$this->clientId}"
        );


        $res = json_decode($this->removeCallback($response->getBody()->getContents()), true);

        return $res;

    }

    protected function getAuthUrl($state)
    {

        return $this->buildAuthUrlFromBase('https://graph.qq.com/oauth2.0/authorize', $state);
    }

    /**
     * @param mixed $response
     *
     * @return string
     */
    protected function removeCallback($response)
    {

        if (strpos($response, 'callback') !== false) {
            $lpos = strpos($response, '(');
            $rpos = strrpos($response, ')');
            $response = substr($response, $lpos + 1, $rpos - $lpos - 1);
        }
        return $response;
    }
}