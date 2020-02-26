<?php
declare(strict_types=1);

namespace App\OpenDotaBundle\DTO;

/**
 * Class HeroAPIDTO
 * @package App\OpenDotaBundle\DTO
 */
class HeroAPIDTO
{
    /** @var int */
    private $id;

    /** @var string|null */
    private $name;

    /** @var string|null */
    private $localizedName;

    /** @var string|null */
    private $primaryAttr;

    /** @var string|null */
    private $attackType;

    /** @var array */
    private $roles = [];

    /** @var int|null */
    private $legs;

    /**
     * HeroAPIDTO constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return HeroAPIDTO
     */
    public function setName(?string $name): HeroAPIDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLocalizedName(): ?string
    {
        return $this->localizedName;
    }

    /**
     * @param string|null $localizedName
     * @return HeroAPIDTO
     */
    public function setLocalizedName(?string $localizedName): HeroAPIDTO
    {
        $this->localizedName = $localizedName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrimaryAttr(): ?string
    {
        return $this->primaryAttr;
    }

    /**
     * @param string|null $primaryAttr
     * @return HeroAPIDTO
     */
    public function setPrimaryAttr(?string $primaryAttr): HeroAPIDTO
    {
        $this->primaryAttr = $primaryAttr;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAttackType(): ?string
    {
        return $this->attackType;
    }

    /**
     * @param string|null $attackType
     *
     * @return HeroAPIDTO
     */
    public function setAttackType(?string $attackType): HeroAPIDTO
    {
        $this->attackType = $attackType;

        return $this;
    }

    /**
     * @return array
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @param array|null $roles
     *
     * @return HeroAPIDTO
     */
    public function setRoles(?array $roles): HeroAPIDTO
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getLegs(): ?int
    {
        return $this->legs;
    }

    /**
     * @param int|null $legs
     *
     * @return HeroAPIDTO
     */
    public function setLegs(?int $legs): HeroAPIDTO
    {
        $this->legs = $legs;

        return $this;
    }
}
