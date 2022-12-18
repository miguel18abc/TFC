<?php

namespace ContainerVtlaZgD;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderab50a = null;
    private $initializer618e5 = null;
    private static $publicProperties27d74 = [
        
    ];
    public function getConnection()
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'getConnection', array(), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'getMetadataFactory', array(), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'getExpressionBuilder', array(), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'beginTransaction', array(), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'getCache', array(), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->getCache();
    }
    public function transactional($func)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'transactional', array('func' => $func), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'commit', array(), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->commit();
    }
    public function rollback()
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'rollback', array(), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'getClassMetadata', array('className' => $className), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'createQuery', array('dql' => $dql), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'createNamedQuery', array('name' => $name), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'createQueryBuilder', array(), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'flush', array('entity' => $entity), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'clear', array('entityName' => $entityName), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->clear($entityName);
    }
    public function close()
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'close', array(), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->close();
    }
    public function persist($entity)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'persist', array('entity' => $entity), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'remove', array('entity' => $entity), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'refresh', array('entity' => $entity), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'detach', array('entity' => $entity), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'merge', array('entity' => $entity), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'contains', array('entity' => $entity), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'getEventManager', array(), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'getConfiguration', array(), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'isOpen', array(), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'getUnitOfWork', array(), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'getProxyFactory', array(), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'initializeObject', array('obj' => $obj), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'getFilters', array(), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'isFiltersStateClean', array(), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'hasFilters', array(), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return $this->valueHolderab50a->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer618e5 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHolderab50a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderab50a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderab50a->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, '__get', ['name' => $name], $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        if (isset(self::$publicProperties27d74[$name])) {
            return $this->valueHolderab50a->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderab50a;
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
        $targetObject = $this->valueHolderab50a;
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
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderab50a;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderab50a;
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
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, '__isset', array('name' => $name), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderab50a;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderab50a;
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
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, '__unset', array('name' => $name), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderab50a;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderab50a;
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
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, '__clone', array(), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        $this->valueHolderab50a = clone $this->valueHolderab50a;
    }
    public function __sleep()
    {
        $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, '__sleep', array(), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
        return array('valueHolderab50a');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer618e5 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer618e5;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer618e5 && ($this->initializer618e5->__invoke($valueHolderab50a, $this, 'initializeProxy', array(), $this->initializer618e5) || 1) && $this->valueHolderab50a = $valueHolderab50a;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderab50a;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderab50a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
