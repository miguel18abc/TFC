<?php

namespace ContainerDpoI4eY;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere5ffc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer695e2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbb098 = [
        
    ];

    public function getConnection()
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'getConnection', array(), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'getMetadataFactory', array(), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'getExpressionBuilder', array(), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'beginTransaction', array(), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'getCache', array(), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->getCache();
    }

    public function transactional($func)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'transactional', array('func' => $func), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'wrapInTransaction', array('func' => $func), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'commit', array(), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->commit();
    }

    public function rollback()
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'rollback', array(), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'getClassMetadata', array('className' => $className), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'createQuery', array('dql' => $dql), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'createNamedQuery', array('name' => $name), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'createQueryBuilder', array(), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'flush', array('entity' => $entity), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'clear', array('entityName' => $entityName), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->clear($entityName);
    }

    public function close()
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'close', array(), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->close();
    }

    public function persist($entity)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'persist', array('entity' => $entity), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'remove', array('entity' => $entity), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'refresh', array('entity' => $entity), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'detach', array('entity' => $entity), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'merge', array('entity' => $entity), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'contains', array('entity' => $entity), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'getEventManager', array(), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'getConfiguration', array(), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'isOpen', array(), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'getUnitOfWork', array(), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'getProxyFactory', array(), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'initializeObject', array('obj' => $obj), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'getFilters', array(), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'isFiltersStateClean', array(), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'hasFilters', array(), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return $this->valueHoldere5ffc->hasFilters();
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

        $instance->initializer695e2 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldere5ffc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere5ffc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere5ffc->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, '__get', ['name' => $name], $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        if (isset(self::$publicPropertiesbb098[$name])) {
            return $this->valueHoldere5ffc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5ffc;

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

        $targetObject = $this->valueHoldere5ffc;
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
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5ffc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere5ffc;
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
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, '__isset', array('name' => $name), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5ffc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere5ffc;
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
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, '__unset', array('name' => $name), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5ffc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere5ffc;
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
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, '__clone', array(), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        $this->valueHoldere5ffc = clone $this->valueHoldere5ffc;
    }

    public function __sleep()
    {
        $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, '__sleep', array(), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;

        return array('valueHoldere5ffc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer695e2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer695e2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer695e2 && ($this->initializer695e2->__invoke($valueHoldere5ffc, $this, 'initializeProxy', array(), $this->initializer695e2) || 1) && $this->valueHoldere5ffc = $valueHoldere5ffc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere5ffc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere5ffc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
