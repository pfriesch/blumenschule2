<?php

namespace BSApp\Entity\checkout;

use Doctrine\ORM\Mapping as ORM;

/**
 * BSApp\Entity\checkout\Quickbutton
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BSApp\Entity\checkout\quickbuttonRepository")
 */
class quickbutton
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
     * @var string $pos
     *
     * @ORM\Column(name="pos", type="integer", length=255)
     */
    private $pos;


    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $code
     *
     * @ORM\Column(name="code", type="string", length=10)
     */
    private $code;

    /**
     * @var float $price
     *
     * @ORM\Column(name="price", type="float",nullable = true)
     */
    private $price;

    /**
     * @var string $quickkey
     *
     * @ORM\Column(name="quickkey", type="string", length=5,nullable = true)
     */
    private $quickkey;


    /**
     * @ORM\ManyToOne(targetEntity="cashbox", inversedBy="quickbutton")
     * @ORM\JoinColumn(name="cashbox_id", referencedColumnName="id")
     */

    private $cashbox;

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
     * Set code
     *
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set price
     *
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set quickkey
     *
     * @param string $quickkey
     */
    public function setQuickkey($quickkey)
    {
        $this->quickkey = $quickkey;
    }

    /**
     * Get quickkey
     *
     * @return string
     */
    public function getQuickkey()
    {
        return $this->quickkey;
    }

    /**
     * Set cashbox
     *
     * @param BSApp\Entity\checkout\cashbox $cashbox
     */
    public function setCashbox(cashbox $cashbox)
    {
        $this->cashbox = $cashbox;
    }

    /**
     * Get cashbox
     *
     * @return BSApp\Entity\checkout\cashbox
     */
    public function getCashbox()
    {
        return $this->cashbox;
    }

    /**
     * Set pos
     *
     * @param integer $pos
     */
    public function setPos($pos)
    {
        $this->pos = $pos;
    }

    /**
     * Get pos
     *
     * @return integer
     */
    public function getPos()
    {
        return $this->pos;
    }
}