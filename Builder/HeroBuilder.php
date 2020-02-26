<?php
declare(strict_types=1);

namespace App\OpenDotaBundle\Builder;

use App\OpenDotaBundle\DTO\HeroAPIDTO;

/**
 * Class HeroBuilder
 * @package App\OpenDotaBundle\Builder
 */
class HeroBuilder
{
    /**
     * @param array $data
     * @return HeroAPIDTO
     */
    public function createFromArray(array $data): HeroAPIDTO
    {
        return (new HeroAPIDTO($data['id']))
            ->setName($data['name'])
            ->setLocalizedName($data['localized_name'])
            ->setPrimaryAttr($data['primary_attr'])
            ->setAttackType($data['attack_type'])
            ->setRoles($data['roles'])
            ->setLegs($data['legs']);
    }
}
