<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Propriete extends \App\Entity\Propriete implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'nomPropriete', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'desPropriete', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'adrPropriete', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'localisation', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'etat', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'commune', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'dateAjout', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'dateModifPropriete', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'superficie', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'statut', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'photoPropriete', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'video', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'tourVirtuel', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'walkscore', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'requete', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'vues', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'galeries', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'nbrPiece', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'salleEau', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'piscine', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'panneauSolaire', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'garage', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'spa', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'prix'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'nomPropriete', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'desPropriete', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'adrPropriete', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'localisation', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'etat', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'commune', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'dateAjout', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'dateModifPropriete', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'superficie', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'statut', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'photoPropriete', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'video', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'tourVirtuel', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'walkscore', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'requete', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'vues', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'galeries', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'nbrPiece', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'salleEau', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'piscine', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'panneauSolaire', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'garage', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'spa', '' . "\0" . 'App\\Entity\\Propriete' . "\0" . 'prix'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Propriete $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getNomPropriete(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomPropriete', []);

        return parent::getNomPropriete();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomPropriete(string $nomPropriete): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomPropriete', [$nomPropriete]);

        return parent::setNomPropriete($nomPropriete);
    }

    /**
     * {@inheritDoc}
     */
    public function getDesPropriete(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDesPropriete', []);

        return parent::getDesPropriete();
    }

    /**
     * {@inheritDoc}
     */
    public function setDesPropriete(string $desPropriete): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDesPropriete', [$desPropriete]);

        return parent::setDesPropriete($desPropriete);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdrPropriete(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdrPropriete', []);

        return parent::getAdrPropriete();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdrPropriete(string $adrPropriete): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdrPropriete', [$adrPropriete]);

        return parent::setAdrPropriete($adrPropriete);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalisation(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocalisation', []);

        return parent::getLocalisation();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocalisation(string $localisation): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocalisation', [$localisation]);

        return parent::setLocalisation($localisation);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille(string $ville): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', []);

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat(bool $etat): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', [$etat]);

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommune(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommune', []);

        return parent::getCommune();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommune(?string $commune): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommune', [$commune]);

        return parent::setCommune($commune);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAjout(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAjout', []);

        return parent::getDateAjout();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAjout(\DateTimeInterface $dateAjout): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAjout', [$dateAjout]);

        return parent::setDateAjout($dateAjout);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateModifPropriete(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateModifPropriete', []);

        return parent::getDateModifPropriete();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateModifPropriete(?\DateTimeInterface $dateModifPropriete): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateModifPropriete', [$dateModifPropriete]);

        return parent::setDateModifPropriete($dateModifPropriete);
    }

    /**
     * {@inheritDoc}
     */
    public function getSuperficie(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSuperficie', []);

        return parent::getSuperficie();
    }

    /**
     * {@inheritDoc}
     */
    public function setSuperficie(string $superficie): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSuperficie', [$superficie]);

        return parent::setSuperficie($superficie);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatut(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatut', []);

        return parent::getStatut();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatut(string $statut): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatut', [$statut]);

        return parent::setStatut($statut);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhotoPropriete(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhotoPropriete', []);

        return parent::getPhotoPropriete();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhotoPropriete(string $photoPropriete): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhotoPropriete', [$photoPropriete]);

        return parent::setPhotoPropriete($photoPropriete);
    }

    /**
     * {@inheritDoc}
     */
    public function getVideo(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVideo', []);

        return parent::getVideo();
    }

    /**
     * {@inheritDoc}
     */
    public function setVideo(?string $video): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVideo', [$video]);

        return parent::setVideo($video);
    }

    /**
     * {@inheritDoc}
     */
    public function getTourVirtuel(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTourVirtuel', []);

        return parent::getTourVirtuel();
    }

    /**
     * {@inheritDoc}
     */
    public function setTourVirtuel(?string $tourVirtuel): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTourVirtuel', [$tourVirtuel]);

        return parent::setTourVirtuel($tourVirtuel);
    }

    /**
     * {@inheritDoc}
     */
    public function getWalkscore(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWalkscore', []);

        return parent::getWalkscore();
    }

    /**
     * {@inheritDoc}
     */
    public function setWalkscore(?string $walkscore): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWalkscore', [$walkscore]);

        return parent::setWalkscore($walkscore);
    }

    /**
     * {@inheritDoc}
     */
    public function getRequete(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRequete', []);

        return parent::getRequete();
    }

    /**
     * {@inheritDoc}
     */
    public function setRequete(?string $requete): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRequete', [$requete]);

        return parent::setRequete($requete);
    }

    /**
     * {@inheritDoc}
     */
    public function getVues(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVues', []);

        return parent::getVues();
    }

    /**
     * {@inheritDoc}
     */
    public function setVues(?int $vues): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVues', [$vues]);

        return parent::setVues($vues);
    }

    /**
     * {@inheritDoc}
     */
    public function getGaleries(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGaleries', []);

        return parent::getGaleries();
    }

    /**
     * {@inheritDoc}
     */
    public function addGalery(\App\Entity\Galerie $galery): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGalery', [$galery]);

        return parent::addGalery($galery);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGalery(\App\Entity\Galerie $galery): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGalery', [$galery]);

        return parent::removeGalery($galery);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\App\Entity\User $user): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbrPiece(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbrPiece', []);

        return parent::getNbrPiece();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbrPiece($nbrPiece): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbrPiece', [$nbrPiece]);

        return parent::setNbrPiece($nbrPiece);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalleEau(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalleEau', []);

        return parent::getSalleEau();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalleEau($salleEau): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalleEau', [$salleEau]);

        return parent::setSalleEau($salleEau);
    }

    /**
     * {@inheritDoc}
     */
    public function getPiscine(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPiscine', []);

        return parent::getPiscine();
    }

    /**
     * {@inheritDoc}
     */
    public function setPiscine(?string $piscine): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPiscine', [$piscine]);

        return parent::setPiscine($piscine);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpa(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpa', []);

        return parent::getSpa();
    }

    /**
     * {@inheritDoc}
     */
    public function setSpa(?string $spa): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSpa', [$spa]);

        return parent::setSpa($spa);
    }

    /**
     * {@inheritDoc}
     */
    public function getPanneauSolaire(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPanneauSolaire', []);

        return parent::getPanneauSolaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setPanneauSolaire(?string $panneauSolaire): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPanneauSolaire', [$panneauSolaire]);

        return parent::setPanneauSolaire($panneauSolaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getGarage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGarage', []);

        return parent::getGarage();
    }

    /**
     * {@inheritDoc}
     */
    public function setGarage(?string $garage): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGarage', [$garage]);

        return parent::setGarage($garage);
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(string $type): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', []);

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix($prix): \App\Entity\Propriete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

}
