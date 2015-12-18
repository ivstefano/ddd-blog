<?php
/**
 * Creator: Ivo Stefanov
 * Date: 18.12.2015 г.
 * Type:
 */
namespace Blog\Config;

use Silex\Application;
use Blog\Application\PostService;
use Blog\Infrastructure\Post\Repository\InMemoryPostRepository;

class Container {
	const POST_SERVICE = 'post_service';

	/**
	 * @var Application
	 */
	private $application;

	/**
	 * Container constructor.
	 * @param Application $application
	 */
	public function __construct(Application $application) {
		$this->application = $application;
	}

	/**
	 * Loads all the dependencies used by the application
	 */
	public function loadDependencies() {
		$this->application[self::POST_SERVICE] = function ($c) {
			return new PostService(
				new InMemoryPostRepository
			);
		};
	}
}
