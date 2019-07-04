<?php
namespace App\Entity\Type;

use App\Entity\AbstractEntity;

class Status extends AbstractEntity
{
    /**
     * @var string
     */
    private $name = '';

    /**
     * @var string
     */
    private $internalName = '';

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getInternalName(): string
    {
        return $this->internalName;
    }

    /**
     * @param string $name
     * @return Status
     */
    public function setName(string $name): Status
    {
        $this->name = $name;
        $this->setInternalName($name);
        return $this;
    }

    /**
     * @param string $internalName
     * @return Status
     */
    public function setInternalName(string $internalName): Status
    {
        $this->internalName = strtoupper(str_replace(' ', '_', $internalName));
        return $this;
    }

}