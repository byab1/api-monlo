<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Facture extends \App\Entity\Facture implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Facture' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Facture' . "\0" . 'montantFacture', '' . "\0" . 'App\\Entity\\Facture' . "\0" . 'numFacture', '' . "\0" . 'App\\Entity\\Facture' . "\0" . 'apercu', '' . "\0" . 'App\\Entity\\Facture' . "\0" . 'statutFacture', '' . "\0" . 'App\\Entity\\Facture' . "\0" . 'envoyeLe', '' . "\0" . 'App\\Entity\\Facture' . "\0" . 'modifieLe', '' . "\0" . 'App\\Entity\\Facture' . "\0" . 'supprimerLe', '' . "\0" . 'App\\Entity\\Facture' . "\0" . 'user'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Facture' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Facture' . "\0" . 'montantFacture', '' . "\0" . 'App\\Entity\\Facture' . "\0" . 'numFacture', '' . "\0" . 'App\\Entity\\Facture' . "\0" . 'apercu', '' . "\0" . 'App\\Entity\\Facture' . "\0" . 'statutFacture', '' . "\0" . 'App\\Entity\\Facture' . "\0" . 'envoyeLe', '' . "\0" . 'App\\Entity\\Facture' . "\0" . 'modifieLe', '' . "\0" . 'App\\Entity\\Facture' . "\0" . 'supprimerLe', '' . "\0" . 'App\\Entity\\Facture' . "\0" . 'user'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Facture $proxy) {
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
    public function getMontantFacture(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontantFacture', []);

        return parent::getMontantFacture();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontantFacture($montantFacture): \App\Entity\Facture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontantFacture', [$montantFacture]);

        return parent::setMontantFacture($montantFacture);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumFacture(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumFacture', []);

        return parent::getNumFacture();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumFacture($numFacture): \App\Entity\Facture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumFacture', [$numFacture]);

        return parent::setNumFacture($numFacture);
    }

    /**
     * {@inheritDoc}
     */
    public function getApercu(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApercu', []);

        return parent::getApercu();
    }

    /**
     * {@inheritDoc}
     */
    public function setApercu(?string $apercu): \App\Entity\Facture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApercu', [$apercu]);

        return parent::setApercu($apercu);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatutFacture(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatutFacture', []);

        return parent::getStatutFacture();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatutFacture(string $statutFacture): \App\Entity\Facture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatutFacture', [$statutFacture]);

        return parent::setStatutFacture($statutFacture);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnvoyeLe(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnvoyeLe', []);

        return parent::getEnvoyeLe();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnvoyeLe($envoyeLe): \App\Entity\Facture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnvoyeLe', [$envoyeLe]);

        return parent::setEnvoyeLe($envoyeLe);
    }

    /**
     * {@inheritDoc}
     */
    public function getModifieLe(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifieLe', []);

        return parent::getModifieLe();
    }

    /**
     * {@inheritDoc}
     */
    public function setModifieLe(?\DateTimeInterface $modifieLe): \App\Entity\Facture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifieLe', [$modifieLe]);

        return parent::setModifieLe($modifieLe);
    }

    /**
     * {@inheritDoc}
     */
    public function getSupprimerLe(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSupprimerLe', []);

        return parent::getSupprimerLe();
    }

    /**
     * {@inheritDoc}
     */
    public function setSupprimerLe($supprimerLe): \App\Entity\Facture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSupprimerLe', [$supprimerLe]);

        return parent::setSupprimerLe($supprimerLe);
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
    public function setUser(?\App\Entity\User $user): \App\Entity\Facture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

}
