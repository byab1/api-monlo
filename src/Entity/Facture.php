<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\FactureRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=FactureRepository::class)
 * @ApiResource(
 * normalizationContext={"groups"={"lecture_facture"}},
 * denormalizationContext={"disable_type_enforcement"=true}
 * )
 */
class Facture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"lecture_facture", "lecture_user"})
     */
    private $id;
    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Le montant de la facture est obligatoire")
     * @Assert\Type(type="numeric", message="Le montant de la facture doit être numérique")
     * @Groups({"lecture_facture", "lecture_user"})
     */
    private $montantFacture;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Le numéro de la facture est obligatoire")
     * @Assert\Type(type="integer", message="Le numéro de la facture doit être un nombre")
     * @Groups({"lecture_facture", "lecture_user"})
     */
    private $numFacture;

    /**
     * @ORM\Column(type="string", length=191, nullable=true)
     * @Groups({"lecture_facture"})
     */
    private $apercu;

    /**
     * @ORM\Column(type="string", length=191)
     * @Assert\NotBlank(message="Le statut de la facture est obligatoire")
     * @Assert\Choice(choices={"SENT", "PAID", "CANCELLED"}, message="Le statut doit être SENT, PAID ou CANCELLED")
     * @Groups({"lecture_facture"})
     */
    private $statutFacture;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"lecture_facture"})
     * @Assert\NotBlank(message="La date d'envoie de la facture est obligatoire")
     */
    private $envoyeLe;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"lecture_facture"})
     * 
     */
    private $modifieLe;
    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"lecture_facture"})
     * 
     */
    private $supprimerLe;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="facture")
     * @ORM\JoinColumn(nullable=true)
     * @Groups({"lecture_facture"})
     * @Assert\NotBlank(message="La facture doit avoir un utilisateur")
     */
    private $user;



    public function getId(): ?int
    {
        return $this->id;
    }
    public function getMontantFacture(): ?float
    {
        return $this->montantFacture;
    }

    public function setMontantFacture($montantFacture): self
    {
        $this->montantFacture = $montantFacture;

        return $this;
    }

    public function getNumFacture(): ?int
    {
        return $this->numFacture;
    }

    public function setNumFacture($numFacture): self
    {
        $this->numFacture = $numFacture;

        return $this;
    }

    public function getApercu(): ?string
    {
        return $this->apercu;
    }

    public function setApercu(?string $apercu): self
    {
        $this->apercu = $apercu;

        return $this;
    }

    public function getStatutFacture(): ?string
    {
        return $this->statutFacture;
    }

    public function setStatutFacture(string $statutFacture): self
    {
        $this->statutFacture = $statutFacture;

        return $this;
    }

    public function getEnvoyeLe(): ?\DateTimeInterface
    {
        return $this->envoyeLe;
    }

    public function setEnvoyeLe($envoyeLe): self
    {
        $this->envoyeLe = $envoyeLe;

        return $this;
    }

    public function getModifieLe(): ?\DateTimeInterface
    {
        return $this->modifieLe;
    }

    public function setModifieLe(?\DateTimeInterface $modifieLe): self
    {
        $this->modifieLe = $modifieLe;

        return $this;
    }

    public function getSupprimerLe(): ?\DateTimeInterface
    {
        return $this->supprimerLe;
    }

    public function setSupprimerLe($supprimerLe): self
    {
        $this->supprimerLe = $supprimerLe;

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
}
