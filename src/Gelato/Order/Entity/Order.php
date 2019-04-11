<?php

namespace App\Gelato\Order\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Gelato\Cart\Entity\Cart;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Gelato\Order\Repository\OrderRepository")
 */
class Order
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Gelato\Cart\Entity\Cart", cascade={"persist", "remove"})
     */
    private $cart;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $promiseUid;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPromiseUid(): ?string
    {
        return $this->promiseUid;
    }

    public function setPromiseUid(string $promiseUid): self
    {
        $this->promiseUid = $promiseUid;

        return $this;
    }
}
