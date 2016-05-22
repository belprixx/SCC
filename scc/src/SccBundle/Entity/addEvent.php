<?php

namespace SccBundle\Entity;

use ADesigns\CalendarBundle\Entity\EventEntity as BaseCalendar;
use Doctrine\ORM\Mapping as ORM;

/**
 * addEvent
 *
 * @ORM\Table(name="add_event")
 * @ORM\Entity(repositoryClass="SccBundle\Repository\addEventRepository")
 */
class addEvent extends BaseCalendar
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="datetime")
     */
    private $startDate;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="datetime")
     */
    private $endDate;
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    protected $title;
    /**
     * @var int
     *
     * @ORM\Column(name="idUser", type="integer")
     */
    private $idUser;
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return addEvent
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }
    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return addEvent
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
    /**
     * Set title
     *
     * @param string $title
     *
     * @return addEvent
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return addEvent
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
        return $this;
    }
    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}

