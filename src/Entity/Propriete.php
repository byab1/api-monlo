<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProprieteRepository;
use ApiPlatform\Core\Annotation\ApiFilter;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\RangeFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * @ORM\Entity(repositoryClass=ProprieteRepository::class)
 * @ApiResource(
 *  attributes={
 *      "order":{"dateAjout":"desc"}
 *  },
 *  normalizationContext={"groups"={"lecture_propriete"}}
 * )
 * @ApiFilter(SearchFilter::class, properties={"localisation":"partial", "ville":"partial", "type":"exact"})
 * @ApiFilter(RangeFilter::class, properties= {"prix"})
 * @ApiFilter(OrderFilter::class)
 */
class Propriete
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"lecture_propriete", "lecture_galerie", "lecture_user"})
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=191)
     * @Assert\NotBlank(message="Le nom de la propriété est obligatoire")
     *  @Groups({"lecture_propriete", "lecture_galerie", "lecture_user"})
     */
    private $nomPropriete;

    /**
     * @ORM\Column(type="string", length=191)
     * @Assert\NotBlank(message="La description de la propriété est obligatoire")
     * @Groups({"lecture_propriete"})
     */
    private $desPropriete;

    /**
     * @ORM\Column(type="string", length=191, nullable=true)
     * @Groups({"lecture_propriete"})
     * 
     */
    private $adrPropriete;

    /**
     * @ORM\Column(type="string", length=191)
     * @Assert\NotBlank(message="La localisation de la propriété est obligatoire")
     * @Groups({"lecture_propriete"})
     */
    private $localisation;

    /**
     * @ORM\Column(type="string", length=191)
     * @Assert\NotBlank(message="La ville de la propriété est obligatoire")
     * @Groups({"lecture_propriete", "lecture_galerie", "lecture_user"})
     */
    private $ville;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"lecture_propriete"})
     */
    private $etat;

    /**
     * @ORM\Column(type="string", length=191, nullable=true)
     * @Groups({"lecture_propriete"})
     */
    private $commune;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"lecture_propriete"})
     */
    private $dateAjout;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"lecture_propriete"})
     */
    private $dateModifPropriete;

    /**
     * @ORM\Column(type="string", length=191)
     * @Groups({"lecture_propriete"})
     */
    private $superficie;

    /**
     * @ORM\Column(type="string", length=191)
     * @Assert\NotBlank(message="Le statut de la propriété est obligatoire")
     * @Assert\Choice(choices={"En vente", "Location"}, message="Le statut doit être En vente ou en Location")
     * @Groups({"lecture_propriete"})
     */
    private $statut;

    /**
     * @ORM\Column(type="string", length=191, nullable=true)
     * @Groups({"lecture_propriete"})
     * 
     */
    private $photoPropriete;

    /**
     * @ORM\Column(type="string", length=191, nullable=true)
     * @Groups({"lecture_propriete"})
     */
    private $video;

    /**
     * @ORM\Column(type="string", length=191, nullable=true)
     * @Groups({"lecture_propriete"})
     */
    private $tourVirtuel;

    /**
     * @ORM\Column(type="string", length=191, nullable=true)
     * @Groups({"lecture_propriete"})
     */
    private $walkscore;

    /**
     * @ORM\Column(type="string", length=191, nullable=true)
     * @Groups({"lecture_propriete"})
     */
    private $requete;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"lecture_propriete"})
     */
    private $vues;


    /**
     * @ORM\OneToMany(targetEntity=Galerie::class, mappedBy="propriete")
     * @Groups({"lecture_propriete"})
     */
    private $galeries;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="proprietes")
     * @Groups({"lecture_propriete"})
     */
    private $user;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"lecture_propriete"})
     */
    private $nbrPiece;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"lecture_propriete"})
     */
    private $salleEau;

    /**
     * @ORM\Column(type="string", length=191, nullable=true)
     * @Groups({"lecture_propriete"})
     */
    private $piscine;

    /**
     * @ORM\Column(type="string", length=191, nullable=true)
     * @Groups({"lecture_propriete"})
     */
    private $panneauSolaire;

    /**
     * @ORM\Column(type="string", length=191, nullable=true)
     * @Groups({"lecture_propriete"})
     */
    private $garage;

    /**
     * @ORM\Column(type="string", length=191)
     * @Assert\NotBlank(message="Le type de propriété est obligatoire")
     * @Assert\Choice(choices={"Villa", "Appartement", "Boutique", "Maison", "Entrepot", "Ferme", "Terrain", "Lavage-auto"}, message="Le type de propriété doit être Villa, Maison...")
     * @Groups({"lecture_propriete"})
     */
    private $type;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"lecture_propriete"})
     */
    private $spa;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Le type de propriété est obligatoire")
     * @Groups({"lecture_propriete", "lecture_galerie", "lecture_user"})
     */
    private $prix;

    public function __construct()
    {
        $this->galeries = new ArrayCollection();
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getNomPropriete(): ?string
    {
        return $this->nomPropriete;
    }

    public function setNomPropriete(string $nomPropriete): self
    {
        $this->nomPropriete = $nomPropriete;

        return $this;
    }

    public function getDesPropriete(): ?string
    {
        return $this->desPropriete;
    }

    public function setDesPropriete(string $desPropriete): self
    {
        $this->desPropriete = $desPropriete;

        return $this;
    }

    public function getAdrPropriete(): ?string
    {
        return $this->adrPropriete;
    }

    public function setAdrPropriete(string $adrPropriete): self
    {
        $this->adrPropriete = $adrPropriete;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

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

    public function getCommune(): ?string
    {
        return $this->commune;
    }

    public function setCommune(?string $commune): self
    {
        $this->commune = $commune;

        return $this;
    }

    public function getDateAjout(): ?\DateTimeInterface
    {
        return $this->dateAjout;
    }

    public function setDateAjout(\DateTimeInterface $dateAjout): self
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    public function getDateModifPropriete(): ?\DateTimeInterface
    {
        return $this->dateModifPropriete;
    }

    public function setDateModifPropriete(?\DateTimeInterface $dateModifPropriete): self
    {
        $this->dateModifPropriete = $dateModifPropriete;

        return $this;
    }

    public function getSuperficie(): ?string
    {
        return $this->superficie;
    }

    public function setSuperficie(string $superficie): self
    {
        $this->superficie = $superficie;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getPhotoPropriete(): ?string
    {
        return $this->photoPropriete;
    }

    public function setPhotoPropriete(string $photoPropriete): self
    {
        $this->photoPropriete = $photoPropriete;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(?string $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function getTourVirtuel(): ?string
    {
        return $this->tourVirtuel;
    }

    public function setTourVirtuel(?string $tourVirtuel): self
    {
        $this->tourVirtuel = $tourVirtuel;

        return $this;
    }

    public function getWalkscore(): ?string
    {
        return $this->walkscore;
    }

    public function setWalkscore(?string $walkscore): self
    {
        $this->walkscore = $walkscore;

        return $this;
    }

    public function getRequete(): ?string
    {
        return $this->requete;
    }

    public function setRequete(?string $requete): self
    {
        $this->requete = $requete;

        return $this;
    }

    public function getVues(): ?int
    {
        return $this->vues;
    }

    public function setVues(?int $vues): self
    {
        $this->vues = $vues;

        return $this;
    }




    public function getGaleries(): Collection
    {
        return $this->galeries;
    }

    public function addGalery(Galerie $galery): self
    {
        if (!$this->galeries->contains($galery)) {
            $this->galeries[] = $galery;
            $galery->setPropriete($this);
        }

        return $this;
    }

    public function removeGalery(Galerie $galery): self
    {
        if ($this->galeries->removeElement($galery)) {
            // set the owning side to null (unless already changed)
            if ($galery->getPropriete() === $this) {
                $galery->setPropriete(null);
            }
        }

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getNbrPiece(): ?int
    {
        return $this->nbrPiece;
    }

    public function setNbrPiece($nbrPiece): self
    {
        $this->nbrPiece = $nbrPiece;

        return $this;
    }

    public function getSalleEau(): ?int
    {
        return $this->salleEau;
    }

    public function setSalleEau($salleEau): self
    {
        $this->salleEau = $salleEau;

        return $this;
    }

    public function getPiscine(): ?string
    {
        return $this->piscine;
    }

    public function setPiscine(?string $piscine): self
    {
        $this->piscine = $piscine;

        return $this;
    }

    public function getSpa(): ?string
    {
        return $this->spa;
    }

    public function setSpa(?string $spa): self
    {
        $this->spa = $spa;

        return $this;
    }

    public function getPanneauSolaire(): ?string
    {
        return $this->panneauSolaire;
    }

    public function setPanneauSolaire(?string $panneauSolaire): self
    {
        $this->panneauSolaire = $panneauSolaire;

        return $this;
    }

    public function getGarage(): ?string
    {
        return $this->garage;
    }

    public function setGarage(?string $garage): self
    {
        $this->garage = $garage;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix($prix): self
    {
        $this->prix = $prix;

        return $this;
    }
}
