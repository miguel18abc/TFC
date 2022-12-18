<?php

namespace ContainerYLIXa30;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder38e9f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer751b0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties06ead = [
        
    ];

    public function getConnection()
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'getConnection', array(), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'getMetadataFactory', array(), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'getExpressionBuilder', array(), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'beginTransaction', array(), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'getCache', array(), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'transactional', array('func' => $func), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'commit', array(), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->commit();
    }

    public function rollback()
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'rollback', array(), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'getClassMetadata', array('className' => $className), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'createQuery', array('dql' => $dql), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'createNamedQuery', array('name' => $name), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'createQueryBuilder', array(), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'flush', array('entity' => $entity), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'clear', array('entityName' => $entityName), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->clear($entityName);
    }

    public function close()
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'close', array(), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->close();
    }

    public function persist($entity)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'persist', array('entity' => $entity), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'remove', array('entity' => $entity), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'refresh', array('entity' => $entity), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'detach', array('entity' => $entity), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'merge', array('entity' => $entity), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'contains', array('entity' => $entity), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'getEventManager', array(), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'getConfiguration', array(), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'isOpen', array(), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'getUnitOfWork', array(), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'getProxyFactory', array(), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'initializeObject', array('obj' => $obj), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'getFilters', array(), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'isFiltersStateClean', array(), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'hasFilters', array(), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return $this->valueHolder38e9f->hasFilters();
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

        $instance->initializer751b0 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder38e9f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder38e9f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder38e9f->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, '__get', ['name' => $name], $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        if (isset(self::$publicProperties06ead[$name])) {
            return $this->valueHolder38e9f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38e9f;

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

        $targetObject = $this->valueHolder38e9f;
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
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38e9f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder38e9f;
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
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, '__isset', array('name' => $name), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38e9f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder38e9f;
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
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, '__unset', array('name' => $name), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38e9f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder38e9f;
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
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, '__clone', array(), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        $this->valueHolder38e9f = clone $this->valueHolder38e9f;
    }

    public function __sleep()
    {
        $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, '__sleep', array(), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;

        return array('valueHolder38e9f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer751b0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer751b0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer751b0 && ($this->initializer751b0->__invoke($valueHolder38e9f, $this, 'initializeProxy', array(), $this->initializer751b0) || 1) && $this->valueHolder38e9f = $valueHolder38e9f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder38e9f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder38e9f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
