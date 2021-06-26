<?php

namespace Container1N393Iy;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder1a1bd = null;
    private $initializerd517a = null;
    private static $publicProperties8eddc = [
        
    ];
    public function getConnection()
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'getConnection', array(), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'getMetadataFactory', array(), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'getExpressionBuilder', array(), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'beginTransaction', array(), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'getCache', array(), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->getCache();
    }
    public function transactional($func)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'transactional', array('func' => $func), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->transactional($func);
    }
    public function commit()
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'commit', array(), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->commit();
    }
    public function rollback()
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'rollback', array(), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'getClassMetadata', array('className' => $className), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'createQuery', array('dql' => $dql), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'createNamedQuery', array('name' => $name), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'createQueryBuilder', array(), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'flush', array('entity' => $entity), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'clear', array('entityName' => $entityName), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->clear($entityName);
    }
    public function close()
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'close', array(), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->close();
    }
    public function persist($entity)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'persist', array('entity' => $entity), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'remove', array('entity' => $entity), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'refresh', array('entity' => $entity), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'detach', array('entity' => $entity), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'merge', array('entity' => $entity), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'contains', array('entity' => $entity), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'getEventManager', array(), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'getConfiguration', array(), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'isOpen', array(), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'getUnitOfWork', array(), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'getProxyFactory', array(), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'initializeObject', array('obj' => $obj), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'getFilters', array(), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'isFiltersStateClean', array(), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'hasFilters', array(), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return $this->valueHolder1a1bd->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerd517a = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder1a1bd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1a1bd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder1a1bd->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, '__get', ['name' => $name], $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        if (isset(self::$publicProperties8eddc[$name])) {
            return $this->valueHolder1a1bd->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a1bd;
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
        $targetObject = $this->valueHolder1a1bd;
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
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a1bd;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder1a1bd;
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
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, '__isset', array('name' => $name), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a1bd;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder1a1bd;
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
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, '__unset', array('name' => $name), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a1bd;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder1a1bd;
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
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, '__clone', array(), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        $this->valueHolder1a1bd = clone $this->valueHolder1a1bd;
    }
    public function __sleep()
    {
        $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, '__sleep', array(), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
        return array('valueHolder1a1bd');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd517a = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd517a;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerd517a && ($this->initializerd517a->__invoke($valueHolder1a1bd, $this, 'initializeProxy', array(), $this->initializerd517a) || 1) && $this->valueHolder1a1bd = $valueHolder1a1bd;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1a1bd;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1a1bd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
