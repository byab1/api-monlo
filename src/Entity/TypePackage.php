<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\TypePackageRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=TypePackageRepository::class)
 * @ApiResource(
 * normalizationContext={"groups"={"lecture_typepackage"}}
 * )
 */
class TypePackage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"lecture_typepackage", "lecture_package"})
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=191)
     *  @Assert\Choice(choices={"Gratuit", "Standard", "Premium", "Business", "Sur mesure"}, message="Le nom du Package doit être 'Gratuit', 'Standard', 'Premium', 'Business' ou 'Sur mesure'")
     * @Groups({"lecture_typepackage", "lecture_package"})
     * @Assert\NotBlank(message="Le nom du Type de package est obligatoire")
     * 
     */
    private $nomTypePackage;

    /**
     * @ORM\OneToMany(targetEntity=Package::class, mappedBy="typePackage")
     * @Groups({"lecture_typepackage"})
     * 
     */
    private $package;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="typePackage")
     */
    private $users;

    public function __construct()
    {
        $this->package = new ArrayCollection();
        $this->users = new ArrayCollection();
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

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setTypePackage($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getTypePackage() === $this) {
                $user->setTypePackage(null);
            }
        }

        return $this;
    }
}
