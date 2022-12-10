<?php

namespace ContainerRIUmRoi;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfc77b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerde654 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties70842 = [
        
    ];

    public function getConnection()
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'getConnection', array(), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'getMetadataFactory', array(), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'getExpressionBuilder', array(), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'beginTransaction', array(), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'getCache', array(), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->getCache();
    }

    public function transactional($func)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'transactional', array('func' => $func), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'wrapInTransaction', array('func' => $func), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'commit', array(), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->commit();
    }

    public function rollback()
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'rollback', array(), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'getClassMetadata', array('className' => $className), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'createQuery', array('dql' => $dql), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'createNamedQuery', array('name' => $name), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'createQueryBuilder', array(), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'flush', array('entity' => $entity), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'clear', array('entityName' => $entityName), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->clear($entityName);
    }

    public function close()
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'close', array(), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->close();
    }

    public function persist($entity)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'persist', array('entity' => $entity), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'remove', array('entity' => $entity), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'refresh', array('entity' => $entity), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'detach', array('entity' => $entity), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'merge', array('entity' => $entity), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'contains', array('entity' => $entity), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'getEventManager', array(), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'getConfiguration', array(), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'isOpen', array(), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'getUnitOfWork', array(), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'getProxyFactory', array(), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'initializeObject', array('obj' => $obj), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'getFilters', array(), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'isFiltersStateClean', array(), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'hasFilters', array(), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return $this->valueHolderfc77b->hasFilters();
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

        $instance->initializerde654 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderfc77b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfc77b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfc77b->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, '__get', ['name' => $name], $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        if (isset(self::$publicProperties70842[$name])) {
            return $this->valueHolderfc77b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc77b;

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

        $targetObject = $this->valueHolderfc77b;
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
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc77b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfc77b;
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
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, '__isset', array('name' => $name), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc77b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfc77b;
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
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, '__unset', array('name' => $name), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc77b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfc77b;
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
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, '__clone', array(), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        $this->valueHolderfc77b = clone $this->valueHolderfc77b;
    }

    public function __sleep()
    {
        $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, '__sleep', array(), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;

        return array('valueHolderfc77b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerde654 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerde654;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerde654 && ($this->initializerde654->__invoke($valueHolderfc77b, $this, 'initializeProxy', array(), $this->initializerde654) || 1) && $this->valueHolderfc77b = $valueHolderfc77b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfc77b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfc77b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
