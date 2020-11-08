<?php


namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="circuit")
 */
class Circuit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $rawName;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $distance;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $groupSize;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $minAge;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $maxAge;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $points;
}