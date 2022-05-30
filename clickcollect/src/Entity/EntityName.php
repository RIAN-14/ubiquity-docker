<?php

namespace App\Entity;

use App\Repository\EntityNameRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\EntityName;

/**
 * @ORM\Entity(repositoryClass=EntityNameRepository::class)
 */
class EntityName
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
