<?php

namespace App\Entity;

use App\Repository\ShopCartRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ShopCartRepository::class)]
class ShopCart
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $sessionId = null;

    #[ORM\ManyToOne(inversedBy: 'shopCarts')]
    #[ORM\JoinColumn(nullable: false)]
    private ?shopItem $shopItem = null;

    #[ORM\Column]
    private ?int $count = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }

    public function setSessionId(string $sessionId): self
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    public function getShopItem(): ?shopItem
    {
        return $this->shopItem;
    }

    public function setShopItem(?shopItem $shopItem): self
    {
        $this->shopItem = $shopItem;

        return $this;
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }
}
