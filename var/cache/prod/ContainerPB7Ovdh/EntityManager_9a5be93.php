<?php

namespace ContainerPB7Ovdh;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderac70e = null;
    private $initializerdb9d2 = null;
    private static $publicProperties88654 = [
        
    ];
    public function getConnection()
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'getConnection', array(), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'getMetadataFactory', array(), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'getExpressionBuilder', array(), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'beginTransaction', array(), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'getCache', array(), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->getCache();
    }
    public function transactional($func)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'transactional', array('func' => $func), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'commit', array(), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->commit();
    }
    public function rollback()
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'rollback', array(), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'getClassMetadata', array('className' => $className), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'createQuery', array('dql' => $dql), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'createNamedQuery', array('name' => $name), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'createQueryBuilder', array(), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'flush', array('entity' => $entity), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'clear', array('entityName' => $entityName), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->clear($entityName);
    }
    public function close()
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'close', array(), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->close();
    }
    public function persist($entity)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'persist', array('entity' => $entity), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'remove', array('entity' => $entity), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'refresh', array('entity' => $entity), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'detach', array('entity' => $entity), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'merge', array('entity' => $entity), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'contains', array('entity' => $entity), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'getEventManager', array(), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'getConfiguration', array(), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'isOpen', array(), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'getUnitOfWork', array(), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'getProxyFactory', array(), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'initializeObject', array('obj' => $obj), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'getFilters', array(), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'isFiltersStateClean', array(), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'hasFilters', array(), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return $this->valueHolderac70e->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerdb9d2 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHolderac70e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderac70e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderac70e->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, '__get', ['name' => $name], $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        if (isset(self::$publicProperties88654[$name])) {
            return $this->valueHolderac70e->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac70e;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderac70e;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac70e;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderac70e;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, '__isset', array('name' => $name), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac70e;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderac70e;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, '__unset', array('name' => $name), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac70e;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderac70e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, '__clone', array(), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        $this->valueHolderac70e = clone $this->valueHolderac70e;
    }
    public function __sleep()
    {
        $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, '__sleep', array(), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
        return array('valueHolderac70e');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdb9d2 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdb9d2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerdb9d2 && ($this->initializerdb9d2->__invoke($valueHolderac70e, $this, 'initializeProxy', array(), $this->initializerdb9d2) || 1) && $this->valueHolderac70e = $valueHolderac70e;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderac70e;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderac70e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
