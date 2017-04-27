<?php

namespace ObservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="location")
 * @ORM\Entity(repositoryClass="ObservationBundle\Repository\LocationRepository")
 */
class Location
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
     * @ORM\Column(name="latitude", type="decimal", precision=10, scale=10)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="Longitude", type="decimal", precision=10, scale=10)
     */
    private $longitude;

    /**
     * @ORM\ManyToMany(targetEntity="ObservationBundle\Entity\Birds", mappedBy="locations", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $birds;


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
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Location
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Location
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->birds = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add bird
     *
     * @param \ObservationBundle\Entity\Birds $bird
     *
     * @return Location
     */
    public function addBird(\ObservationBundle\Entity\Birds $bird)
    {
        $this->birds[] = $bird;

        return $this;
    }

    /**
     * Remove bird
     *
     * @param \ObservationBundle\Entity\Birds $bird
     */
    public function removeBird(\ObservationBundle\Entity\Birds $bird)
    {
        $this->birds->removeElement($bird);
    }

    /**
     * Get birds
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBirds()
    {
        return $this->birds;
    }
}
