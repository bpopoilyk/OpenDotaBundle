<?php
declare(strict_types=1);

namespace App\OpenDotaBundle\DTOList;

use App\OpenDotaBundle\DTO\HeroAPIDTO;

/**
 * Class HeroAPIDTOList
 * @package App\OpenDotaBundle\DTOList
 */
class HeroAPIDTOList extends AbstractDTOList
{
    /**
     * @inheritdoc
     */
    public function add(HeroAPIDTO $dto)
    {
        $this->list[] = $dto;
    }
}
