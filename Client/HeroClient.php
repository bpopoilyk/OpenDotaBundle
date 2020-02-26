<?php
declare(strict_types=1);

namespace App\OpenDotaBundle\Client;

use App\OpenDotaBundle\Builder\HeroBuilder;
use App\OpenDotaBundle\Builder\MatchBuilder;
use App\OpenDotaBundle\DTOList\HeroAPIDTOList;
use App\OpenDotaBundle\DTOList\MatchAPIDTOList;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class HeroClient
 * @package App\OpenDotaBundle\Client
 */
class HeroClient
{
    /** @const */
    const API_HERO_PATH = '/api/heroes';

    /** @const */
    const API_HERO_MATCHES_PATTERN = '/api/heroes/%d/matches';

    /** @var CommonClient */
    private $commonClient;

    /** @var HeroBuilder */
    private $heroBuilder;

    /** @var MatchBuilder */
    private $matchBuilder;

    /**
     * HeroClient constructor.
     * @param CommonClient $commonClient
     * @param HeroBuilder $heroBuilder
     * @param MatchBuilder $matchBuilder
     */
    public function __construct(CommonClient $commonClient, HeroBuilder $heroBuilder, MatchBuilder $matchBuilder)
    {
        $this->commonClient = $commonClient;
        $this->heroBuilder = $heroBuilder;
        $this->matchBuilder = $matchBuilder;
    }

    /**
     * @return HeroAPIDTOList
     * @throws GuzzleException
     */
    public function getHeroes(): HeroAPIDTOList
    {
        $heroAPIDTOList = new HeroAPIDTOList();
        $heroesArray = $this->commonClient->get(self::API_HERO_PATH);
        foreach ($heroesArray as $item) {
            $heroAPIDTOList->add($this->heroBuilder->createFromArray($item));
        }

        return $heroAPIDTOList;
    }

    /**
     * @param int $heroId
     * @return MatchAPIDTOList
     * @throws GuzzleException
     */
    public function getHeroMatches(int $heroId): MatchAPIDTOList
    {
        $matchAPIDTOList = new MatchAPIDTOList();
        $matchesArray = $this->commonClient->get(sprintf(self::API_HERO_MATCHES_PATTERN, $heroId));
        foreach ($matchesArray as $item) {
            $matchAPIDTOList->add($this->matchBuilder->createFromArray($item));
        }

        return $matchAPIDTOList;
    }
}