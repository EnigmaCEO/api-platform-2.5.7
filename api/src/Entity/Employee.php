<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *
 * @ApiResource
 * @ORM\Entity
 */
class Employee
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
     * @var string First name
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $fname = '';

    /**
     * @var string Last name
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $lname = '';

    /**
     * @var string Position
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $position = '';

    /**
     *
     * @ORM\ManyToOne(targetEntity="Company", inversedBy="employees")
     */
    private $company;

    public function getId(): int
    {
        return $this->id;
    }
}
