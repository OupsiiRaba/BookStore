<?php

namespace ContainerP1BCiaX;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2f758 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer18af9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3bb20 = [
        
    ];

    public function getConnection()
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'getConnection', array(), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'getMetadataFactory', array(), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'getExpressionBuilder', array(), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'beginTransaction', array(), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'getCache', array(), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->getCache();
    }

    public function transactional($func)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'transactional', array('func' => $func), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'wrapInTransaction', array('func' => $func), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'commit', array(), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->commit();
    }

    public function rollback()
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'rollback', array(), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'getClassMetadata', array('className' => $className), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'createQuery', array('dql' => $dql), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'createNamedQuery', array('name' => $name), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'createQueryBuilder', array(), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'flush', array('entity' => $entity), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'clear', array('entityName' => $entityName), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->clear($entityName);
    }

    public function close()
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'close', array(), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->close();
    }

    public function persist($entity)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'persist', array('entity' => $entity), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'remove', array('entity' => $entity), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'refresh', array('entity' => $entity), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'detach', array('entity' => $entity), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'merge', array('entity' => $entity), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'getRepository', array('entityName' => $entityName), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'contains', array('entity' => $entity), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'getEventManager', array(), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'getConfiguration', array(), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'isOpen', array(), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'getUnitOfWork', array(), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'getProxyFactory', array(), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'initializeObject', array('obj' => $obj), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'getFilters', array(), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'isFiltersStateClean', array(), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'hasFilters', array(), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return $this->valueHolder2f758->hasFilters();
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

        $instance->initializer18af9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2f758) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2f758 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2f758->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, '__get', ['name' => $name], $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        if (isset(self::$publicProperties3bb20[$name])) {
            return $this->valueHolder2f758->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2f758;

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

        $targetObject = $this->valueHolder2f758;
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
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2f758;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2f758;
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
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, '__isset', array('name' => $name), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2f758;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2f758;
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
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, '__unset', array('name' => $name), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2f758;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2f758;
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
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, '__clone', array(), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        $this->valueHolder2f758 = clone $this->valueHolder2f758;
    }

    public function __sleep()
    {
        $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, '__sleep', array(), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;

        return array('valueHolder2f758');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer18af9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer18af9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer18af9 && ($this->initializer18af9->__invoke($valueHolder2f758, $this, 'initializeProxy', array(), $this->initializer18af9) || 1) && $this->valueHolder2f758 = $valueHolder2f758;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2f758;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2f758;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
