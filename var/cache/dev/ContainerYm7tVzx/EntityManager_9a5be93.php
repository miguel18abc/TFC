<?php

namespace ContainerYm7tVzx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1574c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4a62a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8b4ca = [
        
    ];

    public function getConnection()
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'getConnection', array(), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'getMetadataFactory', array(), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'getExpressionBuilder', array(), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'beginTransaction', array(), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'getCache', array(), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'transactional', array('func' => $func), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'commit', array(), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->commit();
    }

    public function rollback()
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'rollback', array(), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'getClassMetadata', array('className' => $className), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'createQuery', array('dql' => $dql), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'createNamedQuery', array('name' => $name), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'createQueryBuilder', array(), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'flush', array('entity' => $entity), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'clear', array('entityName' => $entityName), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->clear($entityName);
    }

    public function close()
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'close', array(), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->close();
    }

    public function persist($entity)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'persist', array('entity' => $entity), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'remove', array('entity' => $entity), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'refresh', array('entity' => $entity), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'detach', array('entity' => $entity), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'merge', array('entity' => $entity), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'contains', array('entity' => $entity), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'getEventManager', array(), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'getConfiguration', array(), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'isOpen', array(), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'getUnitOfWork', array(), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'getProxyFactory', array(), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'initializeObject', array('obj' => $obj), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'getFilters', array(), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'isFiltersStateClean', array(), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'hasFilters', array(), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return $this->valueHolder1574c->hasFilters();
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

        $instance->initializer4a62a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1574c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1574c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1574c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, '__get', ['name' => $name], $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        if (isset(self::$publicProperties8b4ca[$name])) {
            return $this->valueHolder1574c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1574c;

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

        $targetObject = $this->valueHolder1574c;
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
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1574c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1574c;
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
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, '__isset', array('name' => $name), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1574c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1574c;
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
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, '__unset', array('name' => $name), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1574c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1574c;
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
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, '__clone', array(), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        $this->valueHolder1574c = clone $this->valueHolder1574c;
    }

    public function __sleep()
    {
        $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, '__sleep', array(), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;

        return array('valueHolder1574c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4a62a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4a62a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4a62a && ($this->initializer4a62a->__invoke($valueHolder1574c, $this, 'initializeProxy', array(), $this->initializer4a62a) || 1) && $this->valueHolder1574c = $valueHolder1574c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1574c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1574c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
