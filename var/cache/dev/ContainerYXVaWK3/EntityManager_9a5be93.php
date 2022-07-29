<?php

namespace ContainerYXVaWK3;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdf51a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8f8a0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties14e3e = [
        
    ];

    public function getConnection()
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'getConnection', array(), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'getMetadataFactory', array(), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'getExpressionBuilder', array(), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'beginTransaction', array(), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'getCache', array(), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'transactional', array('func' => $func), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'commit', array(), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->commit();
    }

    public function rollback()
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'rollback', array(), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'getClassMetadata', array('className' => $className), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'createQuery', array('dql' => $dql), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'createNamedQuery', array('name' => $name), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'createQueryBuilder', array(), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'flush', array('entity' => $entity), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'clear', array('entityName' => $entityName), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->clear($entityName);
    }

    public function close()
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'close', array(), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->close();
    }

    public function persist($entity)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'persist', array('entity' => $entity), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'remove', array('entity' => $entity), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'refresh', array('entity' => $entity), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'detach', array('entity' => $entity), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'merge', array('entity' => $entity), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'contains', array('entity' => $entity), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'getEventManager', array(), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'getConfiguration', array(), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'isOpen', array(), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'getUnitOfWork', array(), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'getProxyFactory', array(), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'initializeObject', array('obj' => $obj), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'getFilters', array(), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'isFiltersStateClean', array(), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'hasFilters', array(), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return $this->valueHolderdf51a->hasFilters();
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

        $instance->initializer8f8a0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdf51a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdf51a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdf51a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, '__get', ['name' => $name], $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        if (isset(self::$publicProperties14e3e[$name])) {
            return $this->valueHolderdf51a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf51a;

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

        $targetObject = $this->valueHolderdf51a;
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
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf51a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdf51a;
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
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, '__isset', array('name' => $name), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf51a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdf51a;
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
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, '__unset', array('name' => $name), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf51a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdf51a;
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
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, '__clone', array(), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        $this->valueHolderdf51a = clone $this->valueHolderdf51a;
    }

    public function __sleep()
    {
        $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, '__sleep', array(), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;

        return array('valueHolderdf51a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8f8a0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8f8a0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8f8a0 && ($this->initializer8f8a0->__invoke($valueHolderdf51a, $this, 'initializeProxy', array(), $this->initializer8f8a0) || 1) && $this->valueHolderdf51a = $valueHolderdf51a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdf51a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdf51a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
