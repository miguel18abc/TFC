<?php

namespace ContainerQpnjMQR;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder38b1f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializereea48 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties42cec = [
        
    ];

    public function getConnection()
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'getConnection', array(), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'getMetadataFactory', array(), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'getExpressionBuilder', array(), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'beginTransaction', array(), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'getCache', array(), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->getCache();
    }

    public function transactional($func)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'transactional', array('func' => $func), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'wrapInTransaction', array('func' => $func), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'commit', array(), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->commit();
    }

    public function rollback()
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'rollback', array(), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'getClassMetadata', array('className' => $className), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'createQuery', array('dql' => $dql), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'createNamedQuery', array('name' => $name), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'createQueryBuilder', array(), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'flush', array('entity' => $entity), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'clear', array('entityName' => $entityName), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->clear($entityName);
    }

    public function close()
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'close', array(), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->close();
    }

    public function persist($entity)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'persist', array('entity' => $entity), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'remove', array('entity' => $entity), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'refresh', array('entity' => $entity), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'detach', array('entity' => $entity), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'merge', array('entity' => $entity), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'getRepository', array('entityName' => $entityName), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'contains', array('entity' => $entity), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'getEventManager', array(), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'getConfiguration', array(), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'isOpen', array(), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'getUnitOfWork', array(), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'getProxyFactory', array(), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'initializeObject', array('obj' => $obj), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'getFilters', array(), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'isFiltersStateClean', array(), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'hasFilters', array(), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return $this->valueHolder38b1f->hasFilters();
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

        $instance->initializereea48 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder38b1f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder38b1f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder38b1f->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, '__get', ['name' => $name], $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        if (isset(self::$publicProperties42cec[$name])) {
            return $this->valueHolder38b1f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38b1f;

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

        $targetObject = $this->valueHolder38b1f;
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
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38b1f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder38b1f;
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
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, '__isset', array('name' => $name), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38b1f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder38b1f;
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
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, '__unset', array('name' => $name), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38b1f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder38b1f;
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
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, '__clone', array(), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        $this->valueHolder38b1f = clone $this->valueHolder38b1f;
    }

    public function __sleep()
    {
        $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, '__sleep', array(), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;

        return array('valueHolder38b1f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializereea48 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializereea48;
    }

    public function initializeProxy() : bool
    {
        return $this->initializereea48 && ($this->initializereea48->__invoke($valueHolder38b1f, $this, 'initializeProxy', array(), $this->initializereea48) || 1) && $this->valueHolder38b1f = $valueHolder38b1f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder38b1f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder38b1f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
