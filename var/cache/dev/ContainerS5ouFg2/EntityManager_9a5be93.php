<?php

namespace ContainerS5ouFg2;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderde181 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb6289 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4a975 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'getConnection', array(), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'getMetadataFactory', array(), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'getExpressionBuilder', array(), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'beginTransaction', array(), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'getCache', array(), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'transactional', array('func' => $func), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'commit', array(), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->commit();
    }

    public function rollback()
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'rollback', array(), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'getClassMetadata', array('className' => $className), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'createQuery', array('dql' => $dql), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'createNamedQuery', array('name' => $name), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'createQueryBuilder', array(), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'flush', array('entity' => $entity), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'clear', array('entityName' => $entityName), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->clear($entityName);
    }

    public function close()
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'close', array(), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->close();
    }

    public function persist($entity)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'persist', array('entity' => $entity), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'remove', array('entity' => $entity), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'refresh', array('entity' => $entity), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'detach', array('entity' => $entity), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'merge', array('entity' => $entity), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'contains', array('entity' => $entity), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'getEventManager', array(), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'getConfiguration', array(), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'isOpen', array(), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'getUnitOfWork', array(), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'getProxyFactory', array(), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'initializeObject', array('obj' => $obj), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'getFilters', array(), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'isFiltersStateClean', array(), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'hasFilters', array(), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return $this->valueHolderde181->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerb6289 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderde181) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderde181 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderde181->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, '__get', ['name' => $name], $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        if (isset(self::$publicProperties4a975[$name])) {
            return $this->valueHolderde181->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde181;

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

        $targetObject = $this->valueHolderde181;
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
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde181;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderde181;
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
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, '__isset', array('name' => $name), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde181;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderde181;
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
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, '__unset', array('name' => $name), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde181;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderde181;
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
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, '__clone', array(), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        $this->valueHolderde181 = clone $this->valueHolderde181;
    }

    public function __sleep()
    {
        $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, '__sleep', array(), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;

        return array('valueHolderde181');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb6289 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb6289;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb6289 && ($this->initializerb6289->__invoke($valueHolderde181, $this, 'initializeProxy', array(), $this->initializerb6289) || 1) && $this->valueHolderde181 = $valueHolderde181;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderde181;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderde181;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
