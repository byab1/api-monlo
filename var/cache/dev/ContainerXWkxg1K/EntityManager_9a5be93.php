<?php

namespace ContainerXWkxg1K;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb631a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer05bac = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf624e = [
        
    ];

    public function getConnection()
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'getConnection', array(), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'getMetadataFactory', array(), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'getExpressionBuilder', array(), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'beginTransaction', array(), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'getCache', array(), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'transactional', array('func' => $func), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->transactional($func);
    }

    public function commit()
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'commit', array(), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->commit();
    }

    public function rollback()
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'rollback', array(), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'getClassMetadata', array('className' => $className), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'createQuery', array('dql' => $dql), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'createNamedQuery', array('name' => $name), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'createQueryBuilder', array(), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'flush', array('entity' => $entity), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'clear', array('entityName' => $entityName), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->clear($entityName);
    }

    public function close()
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'close', array(), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->close();
    }

    public function persist($entity)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'persist', array('entity' => $entity), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'remove', array('entity' => $entity), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'refresh', array('entity' => $entity), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'detach', array('entity' => $entity), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'merge', array('entity' => $entity), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'contains', array('entity' => $entity), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'getEventManager', array(), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'getConfiguration', array(), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'isOpen', array(), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'getUnitOfWork', array(), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'getProxyFactory', array(), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'initializeObject', array('obj' => $obj), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'getFilters', array(), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'isFiltersStateClean', array(), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'hasFilters', array(), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return $this->valueHolderb631a->hasFilters();
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

        $instance->initializer05bac = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb631a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb631a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb631a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, '__get', ['name' => $name], $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        if (isset(self::$publicPropertiesf624e[$name])) {
            return $this->valueHolderb631a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb631a;

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

        $targetObject = $this->valueHolderb631a;
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
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb631a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb631a;
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
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, '__isset', array('name' => $name), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb631a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb631a;
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
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, '__unset', array('name' => $name), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb631a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb631a;
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
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, '__clone', array(), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        $this->valueHolderb631a = clone $this->valueHolderb631a;
    }

    public function __sleep()
    {
        $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, '__sleep', array(), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;

        return array('valueHolderb631a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer05bac = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer05bac;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer05bac && ($this->initializer05bac->__invoke($valueHolderb631a, $this, 'initializeProxy', array(), $this->initializer05bac) || 1) && $this->valueHolderb631a = $valueHolderb631a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb631a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb631a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
