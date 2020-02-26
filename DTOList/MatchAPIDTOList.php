<?php
declare(strict_types=1);

namespace App\OpenDotaBundle\DTOList;

use App\OpenDotaBundle\DTO\MatchAPIDTO;

/**
 * Class MatchAPIDTOList
 * @package App\OpenDotaBundle\DTOList
 */
class MatchAPIDTOList extends AbstractDTOList
{
    /**
     * @inheritdoc
     */
    public function add(MatchAPIDTO $dto)
    {
        $this->list[] = $dto;
    }
}
