<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * test
 *
 * @ORM\Table(name="test")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\testRepository")
 */
class test
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
     * @ORM\Column(name="t1", type="string", length=100, nullable=true, unique=false)
     */
    private $t1;

    /**
     * @var string
     *
     * @ORM\Column(name="t2", type="text")
     */
    private $t2;

    /**
     * @var string
     *
     * @ORM\Column(name="t3", type="text")
     */
    private $t3;


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
     * Set t1
     *
     * @param string $t1
     *
     * @return test
     */
    public function setT1($t1)
    {
        $this->t1 = $t1;

        return $this;
    }

    /**
     * Get t1
     *
     * @return string
     */
    public function getT1()
    {
        return $this->t1;
    }

    /**
     * Set t2
     *
     * @param string $t2
     *
     * @return test
     */
    public function setT2($t2)
    {
        $this->t2 = $t2;

        return $this;
    }

    /**
     * Get t2
     *
     * @return string
     */
    public function getT2()
    {
        return $this->t2;
    }

    /**
     * Set t3
     *
     * @param string $t3
     *
     * @return test
     */
    public function setT3($t3)
    {
        $this->t3 = $t3;

        return $this;
    }

    /**
     * Get t3
     *
     * @return string
     */
    public function getT3()
    {
        return $this->t3;
    }
}

