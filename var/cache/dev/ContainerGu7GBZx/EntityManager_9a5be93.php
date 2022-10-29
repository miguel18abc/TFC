<?php

namespace ContainerGu7GBZx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercd397 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer12d4b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9d100 = [
        
    ];

    public function getConnection()
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'getConnection', array(), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'getMetadataFactory', array(), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'getExpressionBuilder', array(), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'beginTransaction', array(), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'getCache', array(), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->getCache();
    }

    public function transactional($func)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'transactional', array('func' => $func), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'wrapInTransaction', array('func' => $func), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'commit', array(), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->commit();
    }

    public function rollback()
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'rollback', array(), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'getClassMetadata', array('className' => $className), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'createQuery', array('dql' => $dql), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'createNamedQuery', array('name' => $name), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'createQueryBuilder', array(), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'flush', array('entity' => $entity), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'clear', array('entityName' => $entityName), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->clear($entityName);
    }

    public function close()
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'close', array(), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->close();
    }

    public function persist($entity)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'persist', array('entity' => $entity), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'remove', array('entity' => $entity), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'refresh', array('entity' => $entity), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'detach', array('entity' => $entity), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'merge', array('entity' => $entity), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'getRepository', array('entityName' => $entityName), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'contains', array('entity' => $entity), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'getEventManager', array(), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'getConfiguration', array(), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'isOpen', array(), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'getUnitOfWork', array(), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'getProxyFactory', array(), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'initializeObject', array('obj' => $obj), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'getFilters', array(), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'isFiltersStateClean', array(), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'hasFilters', array(), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return $this->valueHoldercd397->hasFilters();
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

        $instance->initializer12d4b = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldercd397) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercd397 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercd397->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, '__get', ['name' => $name], $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        if (isset(self::$publicProperties9d100[$name])) {
            return $this->valueHoldercd397->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd397;

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

        $targetObject = $this->valueHoldercd397;
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
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd397;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercd397;
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
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, '__isset', array('name' => $name), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd397;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercd397;
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
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, '__unset', array('name' => $name), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd397;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercd397;
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
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, '__clone', array(), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        $this->valueHoldercd397 = clone $this->valueHoldercd397;
    }

    public function __sleep()
    {
        $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, '__sleep', array(), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;

        return array('valueHoldercd397');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer12d4b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer12d4b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer12d4b && ($this->initializer12d4b->__invoke($valueHoldercd397, $this, 'initializeProxy', array(), $this->initializer12d4b) || 1) && $this->valueHoldercd397 = $valueHoldercd397;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercd397;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercd397;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
