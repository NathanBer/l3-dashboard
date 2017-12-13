<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fiche
 *
 * @ORM\Table(name="fiche")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FicheRepository")
 */
class Fiche
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
     * @ORM\Column(name="projectname", type="string", length=255)
     */
    private $projectname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="nbDaysDone", type="integer")
     */
    private $nbDaysDone;

    /**
     * @var float
     *
     * @ORM\Column(name="nbDaysSold", type="float")
     */
    private $nbDaysSold;

    /**
     * @var float
     *
     * @ORM\Column(name="progression", type="float")
     */
    private $progression;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255)
     */
    private $comment;


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
     * Set projectname
     *
     * @param string $projectname
     *
     * @return Fiche
     */
    public function setProjectname($projectname)
    {
        $this->projectname = $projectname;

        return $this;
    }

    /**
     * Get projectname
     *
     * @return string
     */
    public function getProjectname()
    {
        return $this->projectname;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Fiche
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set nbDaysDone
     *
     * @param integer $nbDaysDone
     *
     * @return Fiche
     */
    public function setNbDaysDone($nbDaysDone)
    {
        $this->nbDaysDone = $nbDaysDone;

        return $this;
    }

    /**
     * Get nbDaysDone
     *
     * @return int
     */
    public function getNbDaysDone()
    {
        return $this->nbDaysDone;
    }

    /**
     * Set nbDaysSold
     *
     * @param float $nbDaysSold
     *
     * @return Fiche
     */
    public function setNbDaysSold($nbDaysSold)
    {
        $this->nbDaysSold = $nbDaysSold;

        return $this;
    }

    /**
     * Get nbDaysSold
     *
     * @return float
     */
    public function getNbDaysSold()
    {
        return $this->nbDaysSold;
    }

    /**
     * Set progression
     *
     * @param float $progression
     *
     * @return Fiche
     */
    public function setProgression($progression)
    {
        $this->progression = $progression;

        return $this;
    }

    /**
     * Get progression
     *
     * @return float
     */
    public function getProgression()
    {
        return $this->progression;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Fiche
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}

