<?php
declare(strict_types=1);

namespace App\OpenDotaBundle\DTO;

/**
 * Class MatchAPIDTO
 * @package App\OpenDotaBundle\DTO
 */
class MatchAPIDTO
{
    /** @var int */
    private $matchId;

    /** @var int|null */
    private $startTime;

    /** @var int|null */
    private $duration;

    /** @var bool|null */
    private $radiantWin;

    /** @var int|null */
    private $leagueId;

    /** @var string|null */
    private $leagueName;

    /** @var bool|null */
    private $radiant;

    /** @var int|null */
    private $playerSlot;

    /** @var int|null */
    private $accountId;

    /** @var int|null */
    private $kills;

    /** @var int|null */
    private $deaths;

    /** @var int|null */
    private $assists;

    /**
     * MatchAPIDTO constructor.
     * @param int $matchId
     */
    public function __construct(int $matchId)
    {
        $this->matchId = $matchId;
    }

    /**
     * @return int
     */
    public function getMatchId(): int
    {
        return $this->matchId;
    }

    /**
     * @return int|null
     */
    public function getStartTime(): ?int
    {
        return $this->startTime;
    }

    /**
     * @param int|null $startTime
     * @return MatchAPIDTO
     */
    public function setStartTime(?int $startTime): MatchAPIDTO
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * @param int|null $duration
     * @return MatchAPIDTO
     */
    public function setDuration(?int $duration): MatchAPIDTO
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getRadiantWin(): ?bool
    {
        return $this->radiantWin;
    }

    /**
     * @param bool|null $radiantWin
     * @return MatchAPIDTO
     */
    public function setRadiantWin(?bool $radiantWin): MatchAPIDTO
    {
        $this->radiantWin = $radiantWin;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getLeagueId(): ?int
    {
        return $this->leagueId;
    }

    /**
     * @param int|null $leagueId
     * @return MatchAPIDTO
     */
    public function setLeagueId(?int $leagueId): MatchAPIDTO
    {
        $this->leagueId = $leagueId;

        return $this;
    }


    /**
     * @return string|null
     */
    public function getLeagueName(): ?string
    {
        return $this->leagueName;
    }

    /**
     * @param string|null $leagueName
     * @return MatchAPIDTO
     */
    public function setLeagueName(?string $leagueName): MatchAPIDTO
    {
        $this->leagueName = $leagueName;

        return $this;
    }


    /**
     * @return bool|null
     */
    public function getRadiant(): ?bool
    {
        return $this->radiant;
    }

    /**
     * @param bool|null $radiant
     * @return MatchAPIDTO
     */
    public function setRadiant(?bool $radiant): MatchAPIDTO
    {
        $this->radiant = $radiant;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPlayerSlot(): ?int
    {
        return $this->playerSlot;
    }

    /**
     * @param int|null $playerSlot
     * @return MatchAPIDTO
     */
    public function setPlayerSlot(?int $playerSlot): MatchAPIDTO
    {
        $this->playerSlot = $playerSlot;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * @param int|null $accountId
     * @return MatchAPIDTO
     */
    public function setAccountId(?int $accountId): MatchAPIDTO
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getKills(): ?int
    {
        return $this->kills;
    }

    /**
     * @param int|null $kills
     * @return MatchAPIDTO
     */
    public function setKills(?int $kills): MatchAPIDTO
    {
        $this->kills = $kills;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDeaths(): ?int
    {
        return $this->deaths;
    }

    /**
     * @param int|null $deaths
     * @return MatchAPIDTO
     */
    public function setDeaths(?int $deaths): MatchAPIDTO
    {
        $this->deaths = $deaths;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getAssists(): ?int
    {
        return $this->assists;
    }

    /**
     * @param int|null $assists
     * @return MatchAPIDTO
     */
    public function setAssists(?int $assists): MatchAPIDTO
    {
        $this->assists = $assists;

        return $this;
    }
}
