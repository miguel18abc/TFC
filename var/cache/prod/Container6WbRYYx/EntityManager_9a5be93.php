<?php

namespace Container6WbRYYx;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder7dc8b = null;
    private $initializerf4f04 = null;
    private static $publicPropertiesf72f6 = [
        
    ];
    public function getConnection()
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'getConnection', array(), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'getMetadataFactory', array(), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'getExpressionBuilder', array(), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'beginTransaction', array(), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'getCache', array(), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->getCache();
    }
    public function transactional($func)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'transactional', array('func' => $func), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'commit', array(), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->commit();
    }
    public function rollback()
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'rollback', array(), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'getClassMetadata', array('className' => $className), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'createQuery', array('dql' => $dql), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'createNamedQuery', array('name' => $name), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'createQueryBuilder', array(), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'flush', array('entity' => $entity), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'clear', array('entityName' => $entityName), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->clear($entityName);
    }
    public function close()
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'close', array(), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->close();
    }
    public function persist($entity)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'persist', array('entity' => $entity), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'remove', array('entity' => $entity), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'refresh', array('entity' => $entity), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'detach', array('entity' => $entity), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'merge', array('entity' => $entity), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'contains', array('entity' => $entity), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'getEventManager', array(), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'getConfiguration', array(), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'isOpen', array(), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'getUnitOfWork', array(), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'getProxyFactory', array(), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'initializeObject', array('obj' => $obj), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'getFilters', array(), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'isFiltersStateClean', array(), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'hasFilters', array(), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return $this->valueHolder7dc8b->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerf4f04 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHolder7dc8b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7dc8b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder7dc8b->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, '__get', ['name' => $name], $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        if (isset(self::$publicPropertiesf72f6[$name])) {
            return $this->valueHolder7dc8b->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7dc8b;
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
        $targetObject = $this->valueHolder7dc8b;
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
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7dc8b;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder7dc8b;
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
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, '__isset', array('name' => $name), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7dc8b;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder7dc8b;
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
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, '__unset', array('name' => $name), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7dc8b;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder7dc8b;
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
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, '__clone', array(), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        $this->valueHolder7dc8b = clone $this->valueHolder7dc8b;
    }
    public function __sleep()
    {
        $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, '__sleep', array(), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
        return array('valueHolder7dc8b');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf4f04 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf4f04;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerf4f04 && ($this->initializerf4f04->__invoke($valueHolder7dc8b, $this, 'initializeProxy', array(), $this->initializerf4f04) || 1) && $this->valueHolder7dc8b = $valueHolder7dc8b;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7dc8b;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7dc8b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
