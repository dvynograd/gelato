<?php

namespace App\Gelato\Cart\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Gelato\Cart\Entity\Cart;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Gelato\Cart\Repository\CartItemRepository")
 */
class CartItem
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $productUid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pdfUrl;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\ManyToOne(targetEntity="App\Gelato\Cart\Entity\Cart", inversedBy="cartItems")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cart;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductUid(): ?string
    {
        return $this->productUid;
    }

    public function setProductUid(string $productUid): self
    {
        $this->productUid = $productUid;

        return $this;
    }

    public function getPdfUrl(): ?string
    {
        return $this->pdfUrl;
    }

    public function setPdfUrl(string $pdfUrl): self
    {
        $this->pdfUrl = $pdfUrl;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getCart(): ?Cart
    {
        return $this->cart;
    }

    public function setCart(?Cart $cart): self
    {
        $this->cart = $cart;

        return $this;
    }
}
