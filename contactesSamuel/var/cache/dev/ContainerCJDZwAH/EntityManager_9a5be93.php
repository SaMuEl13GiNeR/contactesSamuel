<?php

namespace ContainerCJDZwAH;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb99e7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer05811 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2bba0 = [
        
    ];

    public function getConnection()
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'getConnection', array(), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'getMetadataFactory', array(), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'getExpressionBuilder', array(), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'beginTransaction', array(), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'getCache', array(), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->getCache();
    }

    public function transactional($func)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'transactional', array('func' => $func), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'wrapInTransaction', array('func' => $func), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'commit', array(), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->commit();
    }

    public function rollback()
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'rollback', array(), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'getClassMetadata', array('className' => $className), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'createQuery', array('dql' => $dql), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'createNamedQuery', array('name' => $name), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'createQueryBuilder', array(), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'flush', array('entity' => $entity), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'clear', array('entityName' => $entityName), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->clear($entityName);
    }

    public function close()
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'close', array(), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->close();
    }

    public function persist($entity)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'persist', array('entity' => $entity), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'remove', array('entity' => $entity), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'refresh', array('entity' => $entity), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'detach', array('entity' => $entity), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'merge', array('entity' => $entity), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'getRepository', array('entityName' => $entityName), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'contains', array('entity' => $entity), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'getEventManager', array(), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'getConfiguration', array(), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'isOpen', array(), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'getUnitOfWork', array(), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'getProxyFactory', array(), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'initializeObject', array('obj' => $obj), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'getFilters', array(), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'isFiltersStateClean', array(), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'hasFilters', array(), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return $this->valueHolderb99e7->hasFilters();
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

        $instance->initializer05811 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb99e7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb99e7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb99e7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, '__get', ['name' => $name], $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        if (isset(self::$publicProperties2bba0[$name])) {
            return $this->valueHolderb99e7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb99e7;

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

        $targetObject = $this->valueHolderb99e7;
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
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb99e7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb99e7;
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
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, '__isset', array('name' => $name), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb99e7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb99e7;
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
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, '__unset', array('name' => $name), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb99e7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb99e7;
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
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, '__clone', array(), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        $this->valueHolderb99e7 = clone $this->valueHolderb99e7;
    }

    public function __sleep()
    {
        $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, '__sleep', array(), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;

        return array('valueHolderb99e7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer05811 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer05811;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer05811 && ($this->initializer05811->__invoke($valueHolderb99e7, $this, 'initializeProxy', array(), $this->initializer05811) || 1) && $this->valueHolderb99e7 = $valueHolderb99e7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb99e7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb99e7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
