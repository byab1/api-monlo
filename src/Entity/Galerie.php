<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\GalerieRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=GalerieRepository::class)
 * @ApiResource(
 *  normalizationContext={"groups"={"lecture_galerie"}}
 * )
 */
class Galerie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"lecture_galerie","lecture_propriete"})
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=191)
     * @Groups({"lecture_galerie","lecture_propriete"})
     * @Assert\NotBlank(message="L'url est obligatoire")
     */
    private $url;

    /**
     * @ORM\Column(type="string", length=191)
     * @Groups({"lecture_galerie","lecture_propriete"})
     * @Assert\NotBlank(message="Ce champs est obligatoire")
     */
    private $caption;

    /**
     * @ORM\ManyToOne(targetEntity=Propriete::class, inversedBy="galeries")
     * @Groups({"lecture_galerie"})
     * @Assert\NotBlank(message="La galerie doit etre attibuée à une proprieté")
     */
    private $propriete;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl($url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getCaption(): ?string
    {
        return $this->caption;
    }

    public function setCaption($caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    public function getPropriete(): ?Propriete
    {
        return $this->propriete;
    }

    public function setPropriete(?Propriete $propriete): self
    {
        $this->propriete = $propriete;

        return $this;
    }
}
