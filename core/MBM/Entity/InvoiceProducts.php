<?php

namespace MBM\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * InvoiceProducts
 *
 * @ORM\Table(name="m_invoice_products")
 * @ORM\Entity
 */
class InvoiceProducts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="invoices_id", type="integer", nullable=false)
     */
    private $invoicesId;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;


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
     * Set invoicesId
     *
     * @param integer $invoicesId
     *
     * @return InvoiceProducts
     */
    public function setInvoicesId($invoicesId)
    {
        $this->invoicesId = $invoicesId;
    
        return $this;
    }

    /**
     * Get invoicesId
     *
     * @return integer
     */
    public function getInvoicesId()
    {
        return $this->invoicesId;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return InvoiceProducts
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    
        return $this;
    }

    /**
     * Get productId
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->productId;
    }
}

