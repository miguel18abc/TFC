<?php

namespace ContainerZVDd0xh;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercb2da = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2c7bd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties968bb = [
        
    ];

    public function getConnection()
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'getConnection', array(), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'getMetadataFactory', array(), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'getExpressionBuilder', array(), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'beginTransaction', array(), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'getCache', array(), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'transactional', array('func' => $func), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'commit', array(), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->commit();
    }

    public function rollback()
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'rollback', array(), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'getClassMetadata', array('className' => $className), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'createQuery', array('dql' => $dql), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'createNamedQuery', array('name' => $name), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'createQueryBuilder', array(), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'flush', array('entity' => $entity), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'clear', array('entityName' => $entityName), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->clear($entityName);
    }

    public function close()
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'close', array(), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->close();
    }

    public function persist($entity)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'persist', array('entity' => $entity), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'remove', array('entity' => $entity), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'refresh', array('entity' => $entity), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'detach', array('entity' => $entity), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'merge', array('entity' => $entity), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'contains', array('entity' => $entity), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'getEventManager', array(), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'getConfiguration', array(), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'isOpen', array(), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'getUnitOfWork', array(), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'getProxyFactory', array(), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'initializeObject', array('obj' => $obj), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'getFilters', array(), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'isFiltersStateClean', array(), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'hasFilters', array(), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return $this->valueHoldercb2da->hasFilters();
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

        $instance->initializer2c7bd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercb2da) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercb2da = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercb2da->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, '__get', ['name' => $name], $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        if (isset(self::$publicProperties968bb[$name])) {
            return $this->valueHoldercb2da->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb2da;

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

        $targetObject = $this->valueHoldercb2da;
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
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb2da;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercb2da;
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
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, '__isset', array('name' => $name), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb2da;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercb2da;
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
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, '__unset', array('name' => $name), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb2da;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercb2da;
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
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, '__clone', array(), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        $this->valueHoldercb2da = clone $this->valueHoldercb2da;
    }

    public function __sleep()
    {
        $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, '__sleep', array(), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;

        return array('valueHoldercb2da');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2c7bd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2c7bd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2c7bd && ($this->initializer2c7bd->__invoke($valueHoldercb2da, $this, 'initializeProxy', array(), $this->initializer2c7bd) || 1) && $this->valueHoldercb2da = $valueHoldercb2da;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercb2da;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercb2da;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
