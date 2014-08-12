<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Doctrine\Common\ClassLoader,
    Doctrine\ORM\Configuration,
    Doctrine\ORM\EntityManager,
    Doctrine\Common\Cache\ApcCache,
    Doctrine\DBAL\Logging\EchoSQLLogger;

class Doctrine
{

  public $em = null;

  public function __construct()
  {
    // load database configuration from CodeIgniter
    require_once APPPATH.'config/database.php';

    // Set up class loading. You could use different autoloaders, provided by your favorite framework,
    // if you want to.
    require_once '../vendor/doctrine/common/lib/Doctrine/Common/ClassLoader.php';

    $doctrineClassLoader = new ClassLoader('Doctrine',  APPPATH.'libraries');
    $doctrineClassLoader->register();
    $entitiesClassLoader = new ClassLoader('models', rtrim(APPPATH, "/" ));
    $entitiesClassLoader->register();
    $proxiesClassLoader = new ClassLoader('Proxies', APPPATH.'models/Proxies');
    $proxiesClassLoader->register();

    // Set up caches
    $config = new Configuration;
    $cache = new ApcCache;
    $config->setMetadataCacheImpl($cache);
    $driverImpl = $config->newDefaultAnnotationDriver(array(APPPATH.'models/Entities'));
    $config->setMetadataDriverImpl($driverImpl);
    $config->setQueryCacheImpl($cache);

    // Proxy configuration
    $config->setProxyDir(APPPATH.'/models/Proxies');
    $config->setProxyNamespace('Proxies');

    
    if ( ENVIRONMENT == 'development' )
    {
        // Set up logger
        $logger = new EchoSQLLogger;
        $config->setSQLLogger($logger);
    }

    $config->setAutoGenerateProxyClasses(ENVIRONMENT == 'development');

    // Database connection information
    $connectionOptions = array(
        'driver'   => 'pdo_mysql',
        'user'     => $db['default']['username'],
        'password' => $db['default']['password'],
        'host'     => $db['default']['hostname'],
        'dbname'   => $db['default']['database']
    );

    // Create EntityManager
    $this->em = EntityManager::create($connectionOptions, $config);
  }

}