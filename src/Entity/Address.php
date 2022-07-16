<?php

namespace App\Entity;

use App\Repository\AddressRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AddressRepository::class)]
class Address
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $country = null;

    #[ORM\Column(length: 255)]
    private ?string $city = null;

    #[ORM\Column(length: 255)]
    private ?string $street = null;

    #[ORM\Column(length: 255)]
    private ?string $building = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $office = null;

    #[ORM\OneToMany(mappedBy: 'address', targetEntity: Restaurant::class)]
    private Collection $restaurant;

    public function __construct()
    {
        $this->restaurant = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getBuilding(): ?string
    {
        return $this->building;
    }

    public function setBuilding(string $building): self
    {
        $this->building = $building;

        return $this;
    }

    public function getOffice(): ?string
    {
        return $this->office;
    }

    public function setOffice(?string $office): self
    {
        $this->office = $office;

        return $this;
    }

    /**
     * @return Collection<int, Restaurant>
     */
    public function getRestaurant(): Collection
    {
        return $this->restaurant;
    }

    public function addRestaurant(Restaurant $restaurant): self
    {
        if (!$this->restaurant->contains($restaurant)) {
            $this->restaurant[] = $restaurant;
            $restaurant->setAddress($this);
        }

        return $this;
    }

    public function removeRestaurant(Restaurant $restaurant): self
    {
        if ($this->restaurant->removeElement($restaurant)) {
            // set the owning side to null (unless already changed)
            if ($restaurant->getAddress() === $this) {
                $restaurant->setAddress(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->country;
    }
}
