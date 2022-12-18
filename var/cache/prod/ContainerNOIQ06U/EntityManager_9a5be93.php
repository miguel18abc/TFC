<?php

namespace ContainerNOIQ06U;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder05ce9 = null;
    private $initializer154fc = null;
    private static $publicPropertiesa57e7 = [
        
    ];
    public function getConnection()
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'getConnection', array(), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'getMetadataFactory', array(), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'getExpressionBuilder', array(), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'beginTransaction', array(), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'getCache', array(), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->getCache();
    }
    public function transactional($func)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'transactional', array('func' => $func), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'wrapInTransaction', array('func' => $func), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'commit', array(), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->commit();
    }
    public function rollback()
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'rollback', array(), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'getClassMetadata', array('className' => $className), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'createQuery', array('dql' => $dql), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'createNamedQuery', array('name' => $name), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'createQueryBuilder', array(), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'flush', array('entity' => $entity), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'clear', array('entityName' => $entityName), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->clear($entityName);
    }
    public function close()
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'close', array(), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->close();
    }
    public function persist($entity)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'persist', array('entity' => $entity), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'remove', array('entity' => $entity), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'refresh', array('entity' => $entity), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'detach', array('entity' => $entity), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'merge', array('entity' => $entity), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'getRepository', array('entityName' => $entityName), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'contains', array('entity' => $entity), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'getEventManager', array(), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'getConfiguration', array(), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'isOpen', array(), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'getUnitOfWork', array(), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'getProxyFactory', array(), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'initializeObject', array('obj' => $obj), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'getFilters', array(), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'isFiltersStateClean', array(), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'hasFilters', array(), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return $this->valueHolder05ce9->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer154fc = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHolder05ce9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder05ce9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder05ce9->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, '__get', ['name' => $name], $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        if (isset(self::$publicPropertiesa57e7[$name])) {
            return $this->valueHolder05ce9->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder05ce9;
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
        $targetObject = $this->valueHolder05ce9;
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
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder05ce9;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder05ce9;
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
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, '__isset', array('name' => $name), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder05ce9;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder05ce9;
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
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, '__unset', array('name' => $name), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder05ce9;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder05ce9;
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
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, '__clone', array(), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        $this->valueHolder05ce9 = clone $this->valueHolder05ce9;
    }
    public function __sleep()
    {
        $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, '__sleep', array(), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
        return array('valueHolder05ce9');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer154fc = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer154fc;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer154fc && ($this->initializer154fc->__invoke($valueHolder05ce9, $this, 'initializeProxy', array(), $this->initializer154fc) || 1) && $this->valueHolder05ce9 = $valueHolder05ce9;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder05ce9;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder05ce9;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
