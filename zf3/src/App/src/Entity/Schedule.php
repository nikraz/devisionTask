<?php
/**
 * Created by PhpStorm.
 * User: niki
 * Date: 10/20/19
 * Time: 5:56 PM
 */

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @ORM\Entity
 * @ORM\Table(name="schedule")
 */
class Schedule
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(name="tractors_id", type="integer")
     * @ManyToOne(targetEntity="Tractors", inversedBy="id")
     * @JoinColumn(name="tractors_id", referencedColumnName="id")
     */
    private $tractors_id;

    /**
     * @ORM\Column(name="parcels_id", type="integer")
     * @ManyToOne(targetEntity="Parcels", inversedBy="id")
     * @JoinColumn(name="parcels_id", referencedColumnName="id")
     */
    private $parcels_id;

    /**
     * @ORM\Column(name="size", type="decimal", precision=10, scale=2)
     * @var string
     */
    private $size;

    /**
     * @ORM\Column(name="date", type="datetime")
     * @var datetime
     */
    private $date;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @param string $size
     */
    public function setSize(string $size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getTractorsId()
    {
        return $this->tractors_id;
    }

    /**
     * @param mixed $tractors_id
     */
    public function setTractorsId($tractors_id)
    {
        $this->tractors_id = $tractors_id;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     */
    public function setDate(DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getParcelsId()
    {
        return $this->parcels_id;
    }

    /**
     * @param mixed $parcels_id
     */
    public function setParcelsId($parcels_id)
    {
        $this->parcels_id = $parcels_id;
    }
}