<?php

namespace ContainerHjwniMu;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder09234 = null;
    private $initializer59cdd = null;
    private static $publicProperties7b0c0 = [
        
    ];
    public function getConnection()
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'getConnection', array(), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'getMetadataFactory', array(), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'getExpressionBuilder', array(), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'beginTransaction', array(), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'getCache', array(), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->getCache();
    }
    public function transactional($func)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'transactional', array('func' => $func), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'wrapInTransaction', array('func' => $func), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'commit', array(), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->commit();
    }
    public function rollback()
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'rollback', array(), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'getClassMetadata', array('className' => $className), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'createQuery', array('dql' => $dql), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'createNamedQuery', array('name' => $name), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'createQueryBuilder', array(), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'flush', array('entity' => $entity), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'clear', array('entityName' => $entityName), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->clear($entityName);
    }
    public function close()
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'close', array(), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->close();
    }
    public function persist($entity)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'persist', array('entity' => $entity), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'remove', array('entity' => $entity), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'refresh', array('entity' => $entity), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'detach', array('entity' => $entity), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'merge', array('entity' => $entity), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'getRepository', array('entityName' => $entityName), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'contains', array('entity' => $entity), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'getEventManager', array(), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'getConfiguration', array(), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'isOpen', array(), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'getUnitOfWork', array(), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'getProxyFactory', array(), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'initializeObject', array('obj' => $obj), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'getFilters', array(), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'isFiltersStateClean', array(), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'hasFilters', array(), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return $this->valueHolder09234->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer59cdd = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHolder09234) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder09234 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder09234->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, '__get', ['name' => $name], $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        if (isset(self::$publicProperties7b0c0[$name])) {
            return $this->valueHolder09234->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder09234;
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
        $targetObject = $this->valueHolder09234;
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
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder09234;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder09234;
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
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, '__isset', array('name' => $name), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder09234;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder09234;
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
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, '__unset', array('name' => $name), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder09234;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder09234;
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
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, '__clone', array(), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        $this->valueHolder09234 = clone $this->valueHolder09234;
    }
    public function __sleep()
    {
        $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, '__sleep', array(), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
        return array('valueHolder09234');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer59cdd = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer59cdd;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer59cdd && ($this->initializer59cdd->__invoke($valueHolder09234, $this, 'initializeProxy', array(), $this->initializer59cdd) || 1) && $this->valueHolder09234 = $valueHolder09234;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder09234;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder09234;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
