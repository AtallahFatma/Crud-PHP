<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * entite
 *
 * @ORM\Table(name="entite")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\entiteRepository")
 */
class entite
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
     * @ORM\Column(name="att1", type="string", length=100, nullable=true, unique=false)
     */
    private $att1;

    /**
     * @var string
     *
     * @ORM\Column(name="att2", type="text")
     */
    private $att2;

    /**
     * @var string
     *
     * @ORM\Column(name="att3", type="text")
     */
    private $att3;


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
     * Set att1
     *
     * @param string $att1
     *
     * @return entite
     */
    public function setAtt1($att1)
    {
        $this->att1 = $att1;

        return $this;
    }

    /**
     * Get att1
     *
     * @return string
     */
    public function getAtt1()
    {
        return $this->att1;
    }

    /**
     * Set att2
     *
     * @param string $att2
     *
     * @return entite
     */
    public function setAtt2($att2)
    {
        $this->att2 = $att2;

        return $this;
    }

    /**
     * Get att2
     *
     * @return string
     */
    public function getAtt2()
    {
        return $this->att2;
    }

    /**
     * Set att3
     *
     * @param string $att3
     *
     * @return entite
     */
    public function setAtt3($att3)
    {
        $this->att3 = $att3;

        return $this;
    }

    /**
     * Get att3
     *
     * @return string
     */
    public function getAtt3()
    {
        return $this->att3;
    }
}

