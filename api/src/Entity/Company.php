<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 *
 * @ApiResource
 * @ORM\Entity
 */
class Company
{
    /**
     * @var int The entity Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Company name
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $name = '';

    /**
     *
     * @ORM\OneToMany(targetEntity="Employee", mappedBy="company", cascade={"persist", "remove"})
     */
    private $employees;

    public function getId(): int
    {
        return $this->id;
    }

    public function __construct($name)
    {
        $this->name = $name;
        $this->employees = new ArrayCollection();
    }

    public function getCompanyName()
    {
        return $this->name;
    }

    public function getEmployees()
    {
        return $this->employees->toArray();
    }
}
