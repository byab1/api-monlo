<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\TypePackageRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=TypePackageRepository::class)
 */
class TypePackage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=191)
     *  @Assert\Choice(choices={"Gratuit", "Standard", "Premium", "Business", "Sur mesure"}, message="Le nom du Package doit être 'Gratuit', 'Standard', 'Premium', 'Business' ou 'Sur mesure'")
     */
    private $nomTypePackage;

    /**
     * @ORM\OneToMany(targetEntity=Package::class, mappedBy="typePackage")
     */
    private $package;

    public function __construct()
    {
        $this->package = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getNomTypePackage(): ?string
    {
        return $this->nomTypePackage;
    }

    public function setNomTypePackage(string $nomTypePackage): self
    {
        $this->nomTypePackage = $nomTypePackage;

        return $this;
    }

    /**
     * @return Collection|Package[]
     */
    public function getPackage(): Collection
    {
        return $this->package;
    }

    public function addPackage(Package $package): self
    {
        if (!$this->package->contains($package)) {
            $this->package[] = $package;
            $package->setTypePackage($this);
        }

        return $this;
    }

    public function removePackage(Package $package): self
    {
        if ($this->package->removeElement($package)) {
            // set the owning side to null (unless already changed)
            if ($package->getTypePackage() === $this) {
                $package->setTypePackage(null);
            }
        }

        return $this;
    }
}
