<?php

namespace ContainerDqtsYwM;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8e4ea = null;
    private $initializer3e4f4 = null;
    private static $publicPropertiesb44f8 = [
        
    ];
    public function getConnection()
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'getConnection', array(), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'getMetadataFactory', array(), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'getExpressionBuilder', array(), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'beginTransaction', array(), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'getCache', array(), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->getCache();
    }
    public function transactional($func)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'transactional', array('func' => $func), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'commit', array(), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->commit();
    }
    public function rollback()
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'rollback', array(), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'getClassMetadata', array('className' => $className), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'createQuery', array('dql' => $dql), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'createNamedQuery', array('name' => $name), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'createQueryBuilder', array(), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'flush', array('entity' => $entity), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'clear', array('entityName' => $entityName), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->clear($entityName);
    }
    public function close()
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'close', array(), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->close();
    }
    public function persist($entity)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'persist', array('entity' => $entity), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'remove', array('entity' => $entity), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'refresh', array('entity' => $entity), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'detach', array('entity' => $entity), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'merge', array('entity' => $entity), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'contains', array('entity' => $entity), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'getEventManager', array(), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'getConfiguration', array(), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'isOpen', array(), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'getUnitOfWork', array(), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'getProxyFactory', array(), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'initializeObject', array('obj' => $obj), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'getFilters', array(), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'isFiltersStateClean', array(), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'hasFilters', array(), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return $this->valueHolder8e4ea->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer3e4f4 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHolder8e4ea) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8e4ea = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder8e4ea->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, '__get', ['name' => $name], $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        if (isset(self::$publicPropertiesb44f8[$name])) {
            return $this->valueHolder8e4ea->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e4ea;
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
        $targetObject = $this->valueHolder8e4ea;
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
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e4ea;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8e4ea;
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
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, '__isset', array('name' => $name), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e4ea;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder8e4ea;
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
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, '__unset', array('name' => $name), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e4ea;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder8e4ea;
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
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, '__clone', array(), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        $this->valueHolder8e4ea = clone $this->valueHolder8e4ea;
    }
    public function __sleep()
    {
        $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, '__sleep', array(), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
        return array('valueHolder8e4ea');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3e4f4 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3e4f4;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer3e4f4 && ($this->initializer3e4f4->__invoke($valueHolder8e4ea, $this, 'initializeProxy', array(), $this->initializer3e4f4) || 1) && $this->valueHolder8e4ea = $valueHolder8e4ea;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8e4ea;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8e4ea;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
