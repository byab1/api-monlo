<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\PackageRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=PackageRepository::class)
 */
class Package
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=191)
     */
    private $nomPackage;

    /**
     * @ORM\Column(type="float")
     */
    private $prixPackage;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateExpiration;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbrPropriete;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbVedetProp;

    /**
     * @ORM\Column(type="string", length=191)
     */
    private $desProp;

    /**
     * @ORM\Column(type="boolean")
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity=TypePackage::class, inversedBy="package")
     */
    private $typePackage;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="package")
     */
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }
    public function getNomPackage(): ?string
    {
        return $this->nomPackage;
    }

    public function setNomPackage(string $nomPackage): self
    {
        $this->nomPackage = $nomPackage;

        return $this;
    }

    public function getPrixPackage(): ?float
    {
        return $this->prixPackage;
    }

    public function setPrixPackage(float $prixPackage): self
    {
        $this->prixPackage = $prixPackage;

        return $this;
    }

    public function getDateExpiration(): ?\DateTimeInterface
    {
        return $this->dateExpiration;
    }

    public function setDateExpiration(\DateTimeInterface $dateExpiration): self
    {
        $this->dateExpiration = $dateExpiration;

        return $this;
    }

    public function getNbrPropriete(): ?int
    {
        return $this->nbrPropriete;
    }

    public function setNbrPropriete(int $nbrPropriete): self
    {
        $this->nbrPropriete = $nbrPropriete;

        return $this;
    }

    public function getNbVedetProp(): ?int
    {
        return $this->nbVedetProp;
    }

    public function setNbVedetProp(int $nbVedetProp): self
    {
        $this->nbVedetProp = $nbVedetProp;

        return $this;
    }

    public function getDesProp(): ?string
    {
        return $this->desProp;
    }

    public function setDesProp(string $desProp): self
    {
        $this->desProp = $desProp;

        return $this;
    }

    public function getEtat(): ?bool
    {
        return $this->etat;
    }

    public function setEtat(bool $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getTypePackage(): ?TypePackage
    {
        return $this->typePackage;
    }

    public function setTypePackage(?TypePackage $typePackage): self
    {
        $this->typePackage = $typePackage;

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
            $user->setPackage($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getPackage() === $this) {
                $user->setPackage(null);
            }
        }

        return $this;
    }

}
