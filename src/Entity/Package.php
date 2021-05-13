<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\PackageRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=PackageRepository::class)
 * @ApiResource(
 * normalizationContext={"groups"={"lecture_package"}}
 * )
 */
class Package
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"lecture_package", "lecture_typepackage"})
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=191)
     * @Groups({"lecture_package", "lecture_typepackage"})
     * @Assert\NotBlank(message="Le nom du package est obligatoire")
     * 
     */
    private $nomPackage;

    /**
     * @ORM\Column(type="float")
     * @Groups({"lecture_package", "lecture_typepackage"})
     * @Assert\NotBlank(message="Le prix du package est obligatoire")
     */
    private $prixPackage;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"lecture_package", "lecture_typepackage"})
     * @Assert\NotBlank(message="La date d'expiration du package est obligatoire")
     */
    private $dateExpiration;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"lecture_package", "lecture_typepackage"})
     * @Assert\NotBlank(message="Le nombre de proprieté du package est obligatoire")
     */
    private $nbrPropriete;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"lecture_package", "lecture_typepackage"})
     * 
     */
    private $nbVedetProp;

    /**
     * @ORM\Column(type="string", length=191)
     * @Groups({"lecture_package", "lecture_typepackage"})
     * @Assert\NotBlank(message="La description du package est obligatoire")
     */
    private $desProp;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"lecture_package", "lecture_typepackage"})
     * @Assert\NotBlank(message="Ce champs est obligatoire")
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity=TypePackage::class, inversedBy="package")
     * @Groups({"lecture_package"})
     * @Assert\NotBlank(message="Veuillez selectionnez le type de package")
     */
    private $typePackage;



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
}
