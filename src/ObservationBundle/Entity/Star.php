<?php

namespace ObservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Star
 *
 * @ORM\Table(name="star")
 * @ORM\Entity(repositoryClass="ObservationBundle\Repository\StarRepository")
 */
class Star
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="applicable", type="text")
     */
    private $applicable;

    /**
     * @ORM\ManyToMany(targetEntity="ObservationBundle\Entity\User", inversedBy="stars", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    protected $users;


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
     * Set name
     *
     * @param string $name
     *
     * @return Star
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Star
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set number
     *
     * @param integer $number
     *
     * @return Star
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set applicable
     *
     * @param string $applicable
     *
     * @return Star
     */
    public function setApplicable($applicable)
    {
        $this->applicable = $applicable;

        return $this;
    }

    /**
     * Get applicable
     *
     * @return string
     */
    public function getApplicable()
    {
        return $this->applicable;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->stars = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add star
     *
     * @param \ObservationBundle\Entity\User $star
     *
     * @return Star
     */
    public function addStar(\ObservationBundle\Entity\User $star)
    {
        $this->stars[] = $star;

        return $this;
    }



    /**
     * Add user
     *
     * @param \ObservationBundle\Entity\User $user
     *
     * @return Star
     */
    public function addUser(\ObservationBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \ObservationBundle\Entity\User $user
     */
    public function removeUser(\ObservationBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}
