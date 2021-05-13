<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\Collection;
use phpDocumentor\Reflection\Types\Boolean;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ApiResource(
 * normalizationContext={"groups"={"lecture_user"}}
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"lecture_user", "lecture_propriete", "lecture_facture"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Groups({"lecture_user", "lecture_propriete", "lecture_facture"})
     * @Assert\NotBlank(message="L'email de l'utilisateur est obligatoire")
     * @Assert\Email(message="Le format de l'adresse email doit etre valide")
     */
    private $email;
    /**
     * @ORM\Column(type="string", length=191)
     * @Assert\NotBlank(message="Le nom de l'utilisateur est obligatoire")
     * @Assert\Length(min=3, minMessage="Le nom de l'utilisateur doit avoir au moins 3 caractères", max=100, maxMessage="Le nom de l'utilsateur ne doit pas depasser 100 caractères")
     * @Groups({"lecture_user", "lecture_propriete", "lecture_facture"})
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=191)
     * @Assert\NotBlank(message="Le prénom de l'utilisateur est obligatoire")
     * @Assert\Length(min=3, minMessage="Le prénom  de l'utilisateur doit avoir au moins 3 caractères", max=100, maxMessage="Le prénom  de l'utilsateur ne doit pas depasser 100 caractères")
     * 
     * @Groups({"lecture_user", "lecture_propriete", "lecture_facture"})
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=191)
     * @Assert\NotBlank(message="L'adresse de l'utilisateur est obligatoire")
     * @Groups({"lecture_user"})
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=191)
     * @Assert\NotBlank(message="Le numéro de téléphone est obligatoire")
     * @Groups({"lecture_user", "lecture_propriete", "lecture_facture"})
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=191)
     * @Assert\NotBlank(message="Le logo de l'utilisateur est obligatoire")
     * @Groups({"lecture_user"})
     */
    private $logo;

    /**
     * @ORM\Column(type="integer", nullable=true, length=191)
     * @Groups({"lecture_user"})
     */
    private $cote;

    /**
     * @ORM\Column(type="string", length=191)
     * @Assert\NotBlank(message="L'accredidtation est obligatoire")
     * @Groups({"lecture_user"})
     */
    private $accreditation;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"lecture_user"})
     */
    private $etat;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"lecture_user"})
     */
    private $dateCreation;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"lecture_user"})
     */
    private $dateModification;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"lecture_user"})
     */
    private $dateSuppression;

    /**
     * @ORM\OneToMany(targetEntity=Propriete::class, mappedBy="user")
     * @Groups({"lecture_user"})
     */
    private $proprietes;


    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\OneToMany(targetEntity=Facture::class, mappedBy="user")
     * @Groups({"lecture_user"})
     * @ApiSubresource
     */
    private $facture;

    /**
     * @ORM\ManyToOne(targetEntity=TypePackage::class, inversedBy="users")
     */
    private $typePackage;

    /**
     * Undocumented function
     * @Groups({"lecture_user"})
     * @return float
     */
    public function getTotalAmount(): float
    {
        return array_reduce($this->facture->toArray(), function ($total, $facture) {
            return $total + $facture->getMontantFacture();
        }, 0);
    }

    /**
     * Undocumented function
     * @Groups({"lecture_user"})
     * @return float
     */
    public function getTotalUnpaidAmount(): float
    {
        return array_reduce($this->facture->toArray(), function ($total, $facture) {
            return $total + ($facture->getStatutFacture() === "PAID"  || $facture->getStatutFacture() === "CANCELLED" ? 0 :
                $facture->getMontantFacture());
        }, 0);
    }


    public function __construct()
    {
        $this->proprietes = new ArrayCollection();
        $this->facture = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }
    public function getCote(): ?int
    {
        return $this->cote;
    }

    public function setCote(int $cote): self
    {
        $this->cote = $cote;

        return $this;
    }
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }
    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

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
    public function getAccreditation(): ?string
    {
        return $this->accreditation;
    }

    public function setAccreditation(string $accreditation): self
    {
        $this->accreditation = $accreditation;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }
    public function getDateModification(): ?\DateTimeInterface
    {
        return $this->dateModification;
    }

    public function setDateModification(\DateTimeInterface $dateModification): self
    {
        $this->dateModification = $dateModification;

        return $this;
    }
    public function getDateSuppression(): ?\DateTimeInterface
    {
        return $this->dateSuppression;
    }

    public function setDateSuppression(\DateTimeInterface $dateSuppression): self
    {
        $this->dateSuppression = $dateSuppression;

        return $this;
    }

    /**
     * @return Collection|Propriete[]
     */
    public function getProprietes(): Collection
    {
        return $this->proprietes;
    }

    public function addPropriete(Propriete $propriete): self
    {
        if (!$this->proprietes->contains($propriete)) {
            $this->proprietes[] = $propriete;
            $propriete->setUser($this);
        }

        return $this;
    }

    public function removePropriete(Propriete $propriete): self
    {
        if ($this->proprietes->removeElement($propriete)) {
            // set the owning side to null (unless already changed)
            if ($propriete->getUser() === $this) {
                $propriete->setUser(null);
            }
        }

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection|Facture[]
     */
    public function getFacture(): Collection
    {
        return $this->facture;
    }

    public function addFacture(Facture $facture): self
    {
        if (!$this->facture->contains($facture)) {
            $this->facture[] = $facture;
            $facture->setUser($this);
        }

        return $this;
    }

    public function removeFacture(Facture $facture): self
    {
        if ($this->facture->removeElement($facture)) {
            // set the owning side to null (unless already changed)
            if ($facture->getUser() === $this) {
                $facture->setUser(null);
            }
        }

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
