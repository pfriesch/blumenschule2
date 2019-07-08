<?php

namespace BSApp\Entity\checkout;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * BSApp\Entity\checkout\cashbox
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BSApp\Entity\checkout\cashboxRepository")
 */
class cashbox
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    /**
     * @var string $bonafter
     *
     * @ORM\Column(name="bonafter", type="string", length=255)
     */
    private $bonafter;

    /**
     * @var array $config
     *
     * @ORM\Column(name="config", type="array")
     */


    private $config;

    /**
     * @ORM\OneToMany(targetEntity="quickbutton", mappedBy="cashbox")
     */

    private $quickbuttons;

    /**
     * @ORM\OneToMany(targetEntity="checkout", mappedBy="cashbox")
     */

    private $checkouts;


    public function __construct()
    {
        $this->checkouts = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getName();
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Set config
     *
     * @param array $config
     */
    public function setConfig($config)
    {
        $this->config = $config;
    }

    /**
     * Get config
     *
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }


    /**
     * Add checkouts
     *
     * @param BSApp\Entity\checkout $checkouts
     */
    public function addcheckout(checkout $checkouts)
    {
        $this->checkouts[] = $checkouts;
    }

    /**
     * Get checkouts
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getCheckouts()
    {
        return $this->checkouts;
    }

    /**
     * Add quickbuttons
     *
     * @param BSApp\Entity\checkout\quickbutton $quickbuttons
     */
    public function addquickbutton(quickbutton $quickbuttons)
    {
        $this->quickbuttons[] = $quickbuttons;
    }

    /**
     * Get quickbuttons
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getQuickbuttons()
    {
        return $this->quickbuttons;
    }

    /**
     * Set bonafter
     *
     * @param string $bonafter
     */
    public function setBonafter($bonafter)
    {
        $this->bonafter = $bonafter;
    }

    /**
     * Get bonafter
     *
     * @return string
     */
    public function getBonafter()
    {
        return $this->bonafter;
    }
}