<?php

namespace App\Entity;

use App\Repository\RestaurantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RestaurantRepository::class)]
class Restaurant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 2048)]
    private ?string $description = null;

    #[ORM\Column(length: 1)]
    private ?string $status = null;

    #[ORM\Column(length: 255)]
    private ?string $work_time = null;

    #[ORM\ManyToOne(inversedBy: 'restaurant')]
    private ?Address $address = null;

    #[ORM\OneToMany(mappedBy: 'restaurant', targetEntity: Dish::class, orphanRemoval: true)]
    private Collection $dishes;

    #[ORM\OneToMany(mappedBy: 'restaurant', targetEntity: RestaurantReview::class, orphanRemoval: true)]
    private Collection $restaurantReviews;

    public function __construct()
    {
        $this->dishes = new ArrayCollection();
        $this->restaurantReviews = new ArrayCollection();
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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getWorkTime(): ?string
    {
        return $this->work_time;
    }

    public function setWorkTime(string $work_time): self
    {
        $this->work_time = $work_time;

        return $this;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(?Address $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return Collection<int, Dish>
     */
    public function getDishes(): Collection
    {
        return $this->dishes;
    }

    public function addDish(Dish $dish): self
    {
        if (!$this->dishes->contains($dish)) {
            $this->dishes[] = $dish;
            $dish->setRestaurant($this);
        }

        return $this;
    }

    public function removeDish(Dish $dish): self
    {
        if ($this->dishes->removeElement($dish)) {
            // set the owning side to null (unless already changed)
            if ($dish->getRestaurant() === $this) {
                $dish->setRestaurant(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, RestaurantReview>
     */
    public function getRestaurantReviews(): Collection
    {
        return $this->restaurantReviews;
    }

    public function addRestaurantReview(RestaurantReview $restaurantReview): self
    {
        if (!$this->restaurantReviews->contains($restaurantReview)) {
            $this->restaurantReviews[] = $restaurantReview;
            $restaurantReview->setRestaurant($this);
        }

        return $this;
    }

    public function removeRestaurantReview(RestaurantReview $restaurantReview): self
    {
        if ($this->restaurantReviews->removeElement($restaurantReview)) {
            // set the owning side to null (unless already changed)
            if ($restaurantReview->getRestaurant() === $this) {
                $restaurantReview->setRestaurant(null);
            }
        }

        return $this;
    }
}
