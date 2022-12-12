<?php

namespace Container15iwH8i;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder166be = null;
    private $initializer39391 = null;
    private static $publicPropertiesadf06 = [
        
    ];
    public function getConnection()
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'getConnection', array(), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'getMetadataFactory', array(), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'getExpressionBuilder', array(), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'beginTransaction', array(), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'getCache', array(), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->getCache();
    }
    public function transactional($func)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'transactional', array('func' => $func), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'wrapInTransaction', array('func' => $func), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'commit', array(), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->commit();
    }
    public function rollback()
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'rollback', array(), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'getClassMetadata', array('className' => $className), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'createQuery', array('dql' => $dql), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'createNamedQuery', array('name' => $name), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'createQueryBuilder', array(), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'flush', array('entity' => $entity), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'clear', array('entityName' => $entityName), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->clear($entityName);
    }
    public function close()
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'close', array(), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->close();
    }
    public function persist($entity)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'persist', array('entity' => $entity), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'remove', array('entity' => $entity), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'refresh', array('entity' => $entity), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'detach', array('entity' => $entity), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'merge', array('entity' => $entity), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'getRepository', array('entityName' => $entityName), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'contains', array('entity' => $entity), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'getEventManager', array(), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'getConfiguration', array(), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'isOpen', array(), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'getUnitOfWork', array(), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'getProxyFactory', array(), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'initializeObject', array('obj' => $obj), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'getFilters', array(), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'isFiltersStateClean', array(), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'hasFilters', array(), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return $this->valueHolder166be->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer39391 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHolder166be) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder166be = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder166be->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, '__get', ['name' => $name], $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        if (isset(self::$publicPropertiesadf06[$name])) {
            return $this->valueHolder166be->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder166be;
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
        $targetObject = $this->valueHolder166be;
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
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder166be;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder166be;
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
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, '__isset', array('name' => $name), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder166be;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder166be;
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
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, '__unset', array('name' => $name), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder166be;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder166be;
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
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, '__clone', array(), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        $this->valueHolder166be = clone $this->valueHolder166be;
    }
    public function __sleep()
    {
        $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, '__sleep', array(), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
        return array('valueHolder166be');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer39391 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer39391;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer39391 && ($this->initializer39391->__invoke($valueHolder166be, $this, 'initializeProxy', array(), $this->initializer39391) || 1) && $this->valueHolder166be = $valueHolder166be;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder166be;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder166be;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
