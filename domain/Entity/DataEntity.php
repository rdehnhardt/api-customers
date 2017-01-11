<?php

namespace Domain\Entity;

use Carbon\Carbon;

abstract class DataEntity
{
    /**
     * @var Carbon
     */
    private $created_at;

    /**
     * @var Carbon
     */
    private $updated_at;

    /**
     * @return Carbon
     */
    public function getCreatedAt(): Carbon
    {
        return $this->created_at;
    }

    /**
     * @param Carbon $created_at
     * @return self
     */
    public function setCreatedAt(Carbon $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @return Carbon
     */
    public function getUpdatedAt(): Carbon
    {
        return $this->updated_at;
    }

    /**
     * @param Carbon $updated_at
     * @return self
     */
    public function setUpdatedAt(Carbon $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}