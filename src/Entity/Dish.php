<?php

namespace App\Entity;

use App\Repository\DishRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DishRepository::class)]
class Dish
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 1024)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\Column]
    private ?int $weight = null;

    #[ORM\ManyToOne(inversedBy: 'dishes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Restaurant $restaurant = null;

    #[ORM\ManyToMany(targetEntity: Category::class, inversedBy: 'dishes')]
    private Collection $category;

    #[ORM\Column(length: 1024, nullable: true)]
    private ?string $image = null;

    #[ORM\OneToOne(mappedBy: 'Dish', cascade: ['persist', 'remove'])]
    private ?OrderProduct $orderProduct = null;

    #[ORM\Column(length: 1)]
    private ?string $status = null;

    public function __construct()
    {
        $this->category = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getRestaurant(): ?Restaurant
    {
        return $this->restaurant;
    }

    public function setRestaurant(?Restaurant $restaurant): self
    {
        $this->restaurant = $restaurant;

        return $this;
    }

    /**
     * @return Collection<int, Category>
     */
    public function getCategory(): Collection
    {
        return $this->category;
    }

    public function addCategory(Category $category): self
    {
        if (!$this->category->contains($category)) {
            $this->category[] = $category;
        }

        return $this;
    }

    public function removeCategory(Category $category): self
    {
        $this->category->removeElement($category);

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getOrderProduct(): ?OrderProduct
    {
        return $this->orderProduct;
    }

    public function setOrderProduct(OrderProduct $orderProduct): self
    {
        // set the owning side of the relation if necessary
        if ($orderProduct->getDish() !== $this) {
            $orderProduct->setDish($this);
        }

        $this->orderProduct = $orderProduct;

        return $this;
    }

    public function __toString()
    {
        return $this->title;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
