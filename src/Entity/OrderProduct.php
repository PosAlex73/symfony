<?php

namespace App\Entity;

use App\Repository\OrderProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderProductRepository::class)]
class OrderProduct
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'orderProducts')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Order $Dorder = null;

    #[ORM\OneToOne(inversedBy: 'orderProduct', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Dish $Dish = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDorder(): ?Order
    {
        return $this->Dorder;
    }

    public function setDorder(?Order $Dorder): self
    {
        $this->Dorder = $Dorder;

        return $this;
    }

    public function getDish(): ?Dish
    {
        return $this->Dish;
    }

    public function setDish(Dish $Dish): self
    {
        $this->Dish = $Dish;

        return $this;
    }
}
