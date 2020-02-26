<?php
declare(strict_types=1);

namespace App\OpenDotaBundle\Builder;

use App\OpenDotaBundle\DTO\MatchAPIDTO;

/**
 * Class MatchBuilder
 * @package App\OpenDotaBundle\Builder
 */
class MatchBuilder
{
    /**
     * @param array $data
     * @return MatchAPIDTO
     */
    public function createFromArray(array $data): MatchAPIDTO
    {
        return (new MatchAPIDTO($data['match_id']))
            ->setStartTime($data['start_time'])
            ->setDuration($data['duration'])
            ->setRadiantWin($data['radiant_win'])
            ->setLeagueId($data['leagueid'])
            ->setLeagueName($data['league_name'])
            ->setRadiant($data['radiant'])
            ->setPlayerSlot($data['player_slot'])
            ->setAccountId($data['account_id'])
            ->setKills($data['kills'])
            ->setDeaths($data['deaths'])
            ->setAssists($data['assists']);
    }
}
