<?php

namespace ContainerYRNYbxz;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0981f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0bcff = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese2e3c = [
        
    ];

    public function getConnection()
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'getConnection', array(), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'getMetadataFactory', array(), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'getExpressionBuilder', array(), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'beginTransaction', array(), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'getCache', array(), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'transactional', array('func' => $func), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->transactional($func);
    }

    public function commit()
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'commit', array(), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->commit();
    }

    public function rollback()
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'rollback', array(), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'getClassMetadata', array('className' => $className), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'createQuery', array('dql' => $dql), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'createNamedQuery', array('name' => $name), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'createQueryBuilder', array(), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'flush', array('entity' => $entity), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'clear', array('entityName' => $entityName), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->clear($entityName);
    }

    public function close()
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'close', array(), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->close();
    }

    public function persist($entity)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'persist', array('entity' => $entity), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'remove', array('entity' => $entity), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'refresh', array('entity' => $entity), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'detach', array('entity' => $entity), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'merge', array('entity' => $entity), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'contains', array('entity' => $entity), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'getEventManager', array(), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'getConfiguration', array(), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'isOpen', array(), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'getUnitOfWork', array(), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'getProxyFactory', array(), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'initializeObject', array('obj' => $obj), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'getFilters', array(), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'isFiltersStateClean', array(), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'hasFilters', array(), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return $this->valueHolder0981f->hasFilters();
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

        $instance->initializer0bcff = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0981f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0981f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0981f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, '__get', ['name' => $name], $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        if (isset(self::$publicPropertiese2e3c[$name])) {
            return $this->valueHolder0981f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0981f;

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

        $targetObject = $this->valueHolder0981f;
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
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0981f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0981f;
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
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, '__isset', array('name' => $name), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0981f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0981f;
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
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, '__unset', array('name' => $name), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0981f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0981f;
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
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, '__clone', array(), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        $this->valueHolder0981f = clone $this->valueHolder0981f;
    }

    public function __sleep()
    {
        $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, '__sleep', array(), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;

        return array('valueHolder0981f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0bcff = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0bcff;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0bcff && ($this->initializer0bcff->__invoke($valueHolder0981f, $this, 'initializeProxy', array(), $this->initializer0bcff) || 1) && $this->valueHolder0981f = $valueHolder0981f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0981f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0981f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
