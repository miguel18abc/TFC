<?php

namespace Symfony\Config\Security\FirewallConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AnonymousConfig 
{
    private $lazy;
    private $secret;
    private $_usedProperties = [];
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @deprecated Using "anonymous: lazy" to make the firewall lazy is deprecated, use "anonymous: true" and "lazy: true" instead.
     * @return $this
     */
    public function lazy($value): self
    {
        $this->_usedProperties['lazy'] = true;
        $this->lazy = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function secret($value): self
    {
        $this->_usedProperties['secret'] = true;
        $this->secret = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
        if (array_key_exists('lazy', $value)) {
            $this->_usedProperties['lazy'] = true;
            $this->lazy = $value['lazy'];
            unset($value['lazy']);
        }
    
        if (array_key_exists('secret', $value)) {
            $this->_usedProperties['secret'] = true;
            $this->secret = $value['secret'];
            unset($value['secret']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['lazy'])) {
            $output['lazy'] = $this->lazy;
        }
        if (isset($this->_usedProperties['secret'])) {
            $output['secret'] = $this->secret;
        }
    
        return $output;
    }

}
