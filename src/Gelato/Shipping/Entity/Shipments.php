<?php

namespace App\Gelato\Shipping\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Gelato\Shipping\Repository\ShipmentsRepository")
 */
class Shipments
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
    private $promiseUid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $uid;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="integer")
     */
    private $minDeliveryDays;

    /**
     * @ORM\Column(type="integer")
     */
    private $maxDeliveryDays;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $serviceType;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $methodType;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUid(): ?string
    {
        return $this->uid;
    }

    public function setUid(string $uid): self
    {
        $this->uid = $uid;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getMinDeliveryDays(): ?int
    {
        return $this->minDeliveryDays;
    }

    public function setMinDeliveryDays(int $minDeliveryDays): self
    {
        $this->minDeliveryDays = $minDeliveryDays;

        return $this;
    }

    public function getMaxDeliveryDays(): ?int
    {
        return $this->maxDeliveryDays;
    }

    public function setMaxDeliveryDays(int $maxDeliveryDays): self
    {
        $this->maxDeliveryDays = $maxDeliveryDays;

        return $this;
    }

    public function getServiceType(): ?string
    {
        return $this->serviceType;
    }

    public function setServiceType(string $serviceType): self
    {
        $this->serviceType = $serviceType;

        return $this;
    }

    public function getMethodType(): ?string
    {
        return $this->methodType;
    }

    public function setMethodType(string $methodType): self
    {
        $this->methodType = $methodType;

        return $this;
    }
}
