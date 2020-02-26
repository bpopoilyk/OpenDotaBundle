<?php
declare(strict_types=1);

namespace App\OpenDotaBundle\DTOList;

/**
 * Class AbstractDTOList
 * @package App\OpenDotaBundle\DTOList
 */
abstract class AbstractDTOList implements \Countable, \Iterator
{
    /** @var object[] */
    protected $list = [];

    /** @var integer */
    protected $position = 0;

    /**
     * @inheritdoc
     */
    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * @inheritdoc
     */
    public function current()
    {
        return $this->list[$this->position];
    }

    /**
     * @inheritdoc
     */
    public function key(): int
    {
        return $this->position;
    }

    /**
     * @inheritdoc
     */
    public function next()
    {
        ++$this->position;
    }

    /**
     * @inheritdoc
     */
    public function valid(): bool
    {
        return isset($this->list[$this->position]);
    }

    /**
     * @inheritdoc
     */
    public function count(): int
    {
        return count($this->list);
    }
}
