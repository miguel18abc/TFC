<?php

namespace Container1Y1BZ2x;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd71fa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera78c4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2f6fc = [
        
    ];

    public function getConnection()
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'getConnection', array(), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'getMetadataFactory', array(), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'getExpressionBuilder', array(), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'beginTransaction', array(), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'getCache', array(), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->getCache();
    }

    public function transactional($func)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'transactional', array('func' => $func), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'wrapInTransaction', array('func' => $func), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'commit', array(), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->commit();
    }

    public function rollback()
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'rollback', array(), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'getClassMetadata', array('className' => $className), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'createQuery', array('dql' => $dql), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'createNamedQuery', array('name' => $name), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'createQueryBuilder', array(), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'flush', array('entity' => $entity), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'clear', array('entityName' => $entityName), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->clear($entityName);
    }

    public function close()
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'close', array(), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->close();
    }

    public function persist($entity)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'persist', array('entity' => $entity), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'remove', array('entity' => $entity), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'refresh', array('entity' => $entity), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'detach', array('entity' => $entity), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'merge', array('entity' => $entity), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'getRepository', array('entityName' => $entityName), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'contains', array('entity' => $entity), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'getEventManager', array(), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'getConfiguration', array(), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'isOpen', array(), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'getUnitOfWork', array(), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'getProxyFactory', array(), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'initializeObject', array('obj' => $obj), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'getFilters', array(), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'isFiltersStateClean', array(), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'hasFilters', array(), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return $this->valueHolderd71fa->hasFilters();
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

        $instance->initializera78c4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd71fa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd71fa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd71fa->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, '__get', ['name' => $name], $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        if (isset(self::$publicProperties2f6fc[$name])) {
            return $this->valueHolderd71fa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd71fa;

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

        $targetObject = $this->valueHolderd71fa;
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
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd71fa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd71fa;
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
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, '__isset', array('name' => $name), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd71fa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd71fa;
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
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, '__unset', array('name' => $name), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd71fa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd71fa;
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
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, '__clone', array(), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        $this->valueHolderd71fa = clone $this->valueHolderd71fa;
    }

    public function __sleep()
    {
        $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, '__sleep', array(), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;

        return array('valueHolderd71fa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera78c4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera78c4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera78c4 && ($this->initializera78c4->__invoke($valueHolderd71fa, $this, 'initializeProxy', array(), $this->initializera78c4) || 1) && $this->valueHolderd71fa = $valueHolderd71fa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd71fa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd71fa;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
