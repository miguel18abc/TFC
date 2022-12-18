<?php

namespace ContainerDydCUiE;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderadef5 = null;
    private $initializer7c548 = null;
    private static $publicProperties44823 = [
        
    ];
    public function getConnection()
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'getConnection', array(), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'getMetadataFactory', array(), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'getExpressionBuilder', array(), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'beginTransaction', array(), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'getCache', array(), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->getCache();
    }
    public function transactional($func)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'transactional', array('func' => $func), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'commit', array(), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->commit();
    }
    public function rollback()
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'rollback', array(), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'getClassMetadata', array('className' => $className), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'createQuery', array('dql' => $dql), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'createNamedQuery', array('name' => $name), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'createQueryBuilder', array(), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'flush', array('entity' => $entity), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'clear', array('entityName' => $entityName), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->clear($entityName);
    }
    public function close()
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'close', array(), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->close();
    }
    public function persist($entity)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'persist', array('entity' => $entity), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'remove', array('entity' => $entity), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'refresh', array('entity' => $entity), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'detach', array('entity' => $entity), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'merge', array('entity' => $entity), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'contains', array('entity' => $entity), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'getEventManager', array(), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'getConfiguration', array(), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'isOpen', array(), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'getUnitOfWork', array(), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'getProxyFactory', array(), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'initializeObject', array('obj' => $obj), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'getFilters', array(), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'isFiltersStateClean', array(), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'hasFilters', array(), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return $this->valueHolderadef5->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer7c548 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHolderadef5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderadef5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderadef5->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, '__get', ['name' => $name], $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        if (isset(self::$publicProperties44823[$name])) {
            return $this->valueHolderadef5->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderadef5;
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
        $targetObject = $this->valueHolderadef5;
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
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderadef5;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderadef5;
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
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, '__isset', array('name' => $name), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderadef5;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderadef5;
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
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, '__unset', array('name' => $name), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderadef5;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderadef5;
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
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, '__clone', array(), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        $this->valueHolderadef5 = clone $this->valueHolderadef5;
    }
    public function __sleep()
    {
        $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, '__sleep', array(), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
        return array('valueHolderadef5');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7c548 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7c548;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer7c548 && ($this->initializer7c548->__invoke($valueHolderadef5, $this, 'initializeProxy', array(), $this->initializer7c548) || 1) && $this->valueHolderadef5 = $valueHolderadef5;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderadef5;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderadef5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
