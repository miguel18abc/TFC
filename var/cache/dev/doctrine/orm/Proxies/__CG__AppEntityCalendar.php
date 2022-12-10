<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Calendar extends \App\Entity\Calendar implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'start', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'end', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'all_day', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'background_color', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'border_color', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'text_color', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'servicios', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'tutor', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'reserva', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'disabled'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'start', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'end', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'all_day', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'background_color', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'border_color', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'text_color', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'servicios', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'tutor', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'reserva', '' . "\0" . 'App\\Entity\\Calendar' . "\0" . 'disabled'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Calendar $proxy) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
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
    public function getTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(string $title): \App\Entity\Calendar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getStart(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStart', []);

        return parent::getStart();
    }

    /**
     * {@inheritDoc}
     */
    public function setStart(\DateTimeInterface $start): \App\Entity\Calendar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStart', [$start]);

        return parent::setStart($start);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnd(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnd', []);

        return parent::getEnd();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnd(\DateTimeInterface $end): \App\Entity\Calendar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnd', [$end]);

        return parent::setEnd($end);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): \App\Entity\Calendar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function isAllDay(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAllDay', []);

        return parent::isAllDay();
    }

    /**
     * {@inheritDoc}
     */
    public function setAllDay(bool $all_day): \App\Entity\Calendar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAllDay', [$all_day]);

        return parent::setAllDay($all_day);
    }

    /**
     * {@inheritDoc}
     */
    public function getBackgroundColor(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBackgroundColor', []);

        return parent::getBackgroundColor();
    }

    /**
     * {@inheritDoc}
     */
    public function setBackgroundColor(string $background_color): \App\Entity\Calendar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBackgroundColor', [$background_color]);

        return parent::setBackgroundColor($background_color);
    }

    /**
     * {@inheritDoc}
     */
    public function getBorderColor(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBorderColor', []);

        return parent::getBorderColor();
    }

    /**
     * {@inheritDoc}
     */
    public function setBorderColor(string $border_color): \App\Entity\Calendar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBorderColor', [$border_color]);

        return parent::setBorderColor($border_color);
    }

    /**
     * {@inheritDoc}
     */
    public function getTextColor(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTextColor', []);

        return parent::getTextColor();
    }

    /**
     * {@inheritDoc}
     */
    public function setTextColor(string $text_color): \App\Entity\Calendar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTextColor', [$text_color]);

        return parent::setTextColor($text_color);
    }

    /**
     * {@inheritDoc}
     */
    public function getServicios(): ?\App\Entity\Servicios
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getServicios', []);

        return parent::getServicios();
    }

    /**
     * {@inheritDoc}
     */
    public function setServicios(?\App\Entity\Servicios $servicios): \App\Entity\Calendar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setServicios', [$servicios]);

        return parent::setServicios($servicios);
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
    public function setUser(?\App\Entity\User $user): \App\Entity\Calendar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getTutor(): ?\App\Entity\Tutor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTutor', []);

        return parent::getTutor();
    }

    /**
     * {@inheritDoc}
     */
    public function setTutor(?\App\Entity\Tutor $tutor): \App\Entity\Calendar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTutor', [$tutor]);

        return parent::setTutor($tutor);
    }

    /**
     * {@inheritDoc}
     */
    public function getReserva(): ?\App\Entity\Reserva
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReserva', []);

        return parent::getReserva();
    }

    /**
     * {@inheritDoc}
     */
    public function setReserva(?\App\Entity\Reserva $reserva): \App\Entity\Calendar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReserva', [$reserva]);

        return parent::setReserva($reserva);
    }

    /**
     * {@inheritDoc}
     */
    public function isDisabled(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDisabled', []);

        return parent::isDisabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisabled(bool $disabled): \App\Entity\Calendar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisabled', [$disabled]);

        return parent::setDisabled($disabled);
    }

}
