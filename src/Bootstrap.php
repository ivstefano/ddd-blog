<?php
namespace Blog;

use Whoops\Run;
use Silex\Application;
use Blog\Config\Routes;
use Blog\Config\Container;
use Blog\Config\Environment;
use Whoops\Handler\PrettyPageHandler;
use MJanssen\Provider\RoutingServiceProvider;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Set environment
 */
$environment = Environment::DEVELOPMENT;

/**
 * Configure Error Reporting
 */
error_reporting(E_ALL);

/**
 * Register Error Handler
 */
$whoops = new Run();

switch($environment) {
	case Environment::PRODUCTION:
		$whoops->pushHandler(function() {
			echo 'There was a problem with our services, please contact the System Administrator.';
		});
	break;

	case Environment::DEVELOPMENT:
		$whoops->pushHandler(new PrettyPageHandler);
	break;
}

$whoops->register();

/**
 * Setting up the application
 */
$application = new Application;

/**
 * Set up Routing
 */
$routingServiceProvider = new RoutingServiceProvider;
$routes = new Routes('Blog\\Api\\');
$routingServiceProvider->addRoutes($application, $routes->get());

/**
 * Set up the injections
 */
$container = new Container($application);
$container->loadDependencies();

/**
 * Run the application
 */
$application->run();
