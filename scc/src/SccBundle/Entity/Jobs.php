<?php

namespace SccBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jobs
 *
 * @ORM\Table(name="jobs")
 * @ORM\Entity(repositoryClass="SccBundle\Repository\JobsRepository")
 */
class Jobs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Resume", type="text")
     */
    private $resume;

    /**
     * @var string
     *
     * @ORM\Column(name="Duration", type="string", length=255)
     */
    private $duration;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="StartDate", type="datetime")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="EndDate", type="datetime")
     */
    private $endDate;

    /**
     * @var int
     *
     * @ORM\Column(name="Nb_Coach", type="integer")
     */
    private $nbCoach;

    /**
     * @var array
     *
     * @ORM\Column(name="id_user", type="array")
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Jobs
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set resume
     *
     * @param string $resume
     *
     * @return Jobs
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set duration
     *
     * @param string $duration
     *
     * @return Jobs
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Jobs
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
     * @return Jobs
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
     * Set nbCoach
     *
     * @param integer $nbCoach
     *
     * @return Jobs
     */
    public function setNbCoach($nbCoach)
    {
        $this->nbCoach = $nbCoach;

        return $this;
    }

    /**
     * Get nbCoach
     *
     * @return int
     */
    public function getNbCoach()
    {
        return $this->nbCoach;
    }

    /**
     * Set idUser
     *
     * @param array $idUser
     *
     * @return Jobs
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return array
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
