<?php

namespace Acme\BSDataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * stockkeeping
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\BSDataBundle\Entity\StockkeepingRepository")
 */
class Stockkeeping
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="articleId", type="string", length=10)
     */
    private $articleId;

    /**
     * @var string
     *
     * @ORM\Column(name="articleCode", type="string", length=10)
     */
    private $articleCode;

    /**
     * @var string
     *
     * @ORM\Column(name="articleName", type="string", length=255)
     */
    private $articleName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="printed", type="datetime")
     */
    private $printed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="exported", type="datetime",nullable=true)
     */
    private $exported;


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
     * Set quantity
     *
     * @param integer $quantity
     * @return stockkeeping
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set articleId
     *
     * @param string $articleId
     * @return stockkeeping
     */
    public function setArticleId($articleId)
    {
        $this->articleId = $articleId;

        return $this;
    }

    /**
     * Get articleId
     *
     * @return string 
     */
    public function getArticleId()
    {
        return $this->articleId;
    }

    /**
     * Set printed
     *
     * @param \DateTime $printed
     * @return stockkeeping
     */
    public function setPrinted($printed)
    {
        $this->printed = $printed;

        return $this;
    }

    /**
     * Get printed
     *
     * @return \DateTime 
     */
    public function getPrinted()
    {
        return $this->printed;
    }

    /**
     * Set exported
     *
     * @param \DateTime $exported
     * @return stockkeeping
     */
    public function setExported($exported)
    {
        $this->exported = $exported;

        return $this;
    }

    /**
     * Get exported
     *
     * @return \DateTime 
     */
    public function getExported()
    {
        return $this->exported;
    }

    /**
     * @return string
     */
    public function getArticleName() {
        return $this->articleName;
    }

    /**
     * @param string $articleName
     */
    public function setArticleName($articleName) {
        $this->articleName = $articleName;
    }

    /**
     * @return string
     */
    public function getArticleCode() {
        return $this->articleCode;
    }

    /**
     * @param string $articleCode
     */
    public function setArticleCode($articleCode) {
        $this->articleCode = $articleCode;
    }


}
