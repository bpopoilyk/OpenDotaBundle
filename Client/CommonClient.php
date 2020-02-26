<?php
declare(strict_types=1);

namespace App\OpenDotaBundle\Client;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class CommonClient
 * @package App\OpenDotaBundle\Client
 */
class CommonClient
{
    /** @var ClientInterface */
    private $client;

    /** @var string */
    private $apiHost;

    /**
     * CommonClient constructor.
     * @param ClientInterface $client
     * @param string $apiHost
     */
    public function __construct(ClientInterface $client, string $apiHost)
    {
        $this->client = $client;
        $this->apiHost = $apiHost;
    }

    /**
     * @param string $path
     * @return array
     *
     * @throws GuzzleException
     */
    public function get(string $path): array
    {
        $res = $this->client->request('GET', $this->apiHost . $path);

        return json_decode($res->getBody()->getContents(), true);
    }
}
