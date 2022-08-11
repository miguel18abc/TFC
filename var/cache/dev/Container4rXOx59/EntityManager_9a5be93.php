<?php

namespace Container4rXOx59;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0daaa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercabe6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9c139 = [
        
    ];

    public function getConnection()
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'getConnection', array(), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'getMetadataFactory', array(), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'getExpressionBuilder', array(), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'beginTransaction', array(), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'getCache', array(), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->getCache();
    }

    public function transactional($func)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'transactional', array('func' => $func), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'wrapInTransaction', array('func' => $func), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'commit', array(), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->commit();
    }

    public function rollback()
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'rollback', array(), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'getClassMetadata', array('className' => $className), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'createQuery', array('dql' => $dql), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'createNamedQuery', array('name' => $name), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'createQueryBuilder', array(), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'flush', array('entity' => $entity), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'clear', array('entityName' => $entityName), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->clear($entityName);
    }

    public function close()
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'close', array(), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->close();
    }

    public function persist($entity)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'persist', array('entity' => $entity), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'remove', array('entity' => $entity), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'refresh', array('entity' => $entity), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'detach', array('entity' => $entity), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'merge', array('entity' => $entity), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'getRepository', array('entityName' => $entityName), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'contains', array('entity' => $entity), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'getEventManager', array(), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'getConfiguration', array(), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'isOpen', array(), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'getUnitOfWork', array(), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'getProxyFactory', array(), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'initializeObject', array('obj' => $obj), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'getFilters', array(), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'isFiltersStateClean', array(), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'hasFilters', array(), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return $this->valueHolder0daaa->hasFilters();
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

        $instance->initializercabe6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0daaa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0daaa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0daaa->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, '__get', ['name' => $name], $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        if (isset(self::$publicProperties9c139[$name])) {
            return $this->valueHolder0daaa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0daaa;

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

        $targetObject = $this->valueHolder0daaa;
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
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0daaa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0daaa;
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
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, '__isset', array('name' => $name), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0daaa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0daaa;
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
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, '__unset', array('name' => $name), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0daaa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0daaa;
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
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, '__clone', array(), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        $this->valueHolder0daaa = clone $this->valueHolder0daaa;
    }

    public function __sleep()
    {
        $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, '__sleep', array(), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;

        return array('valueHolder0daaa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercabe6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercabe6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercabe6 && ($this->initializercabe6->__invoke($valueHolder0daaa, $this, 'initializeProxy', array(), $this->initializercabe6) || 1) && $this->valueHolder0daaa = $valueHolder0daaa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0daaa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0daaa;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
