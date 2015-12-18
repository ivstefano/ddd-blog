<?php
/**
 * Creator: Ivo Stefanov
 * Date: 18.12.2015 г.
 * Type:
 */
namespace Blog\Config;

class Routes {
	const METHOD = 'method';
	const GET = 'GET';
	const POST = 'POST';
	const PUT = 'PUT';
	const PATCH = 'PATCH';
	const DELETE = 'DELETE';

	const NAME = 'name';
	const PATTERN = 'pattern';
	const CONTROLLER = 'controller';
	const ACTION = 'action';

	private $controllerNamespace;

	/**
	 * Routes constructor.
	 * @param $controllerNamespace
	 */
	public function __construct($controllerNamespace) {
		$this->controllerNamespace = $controllerNamespace;
	}

	/**
	 * @return string
	 */
	public function getControllerNamespace() {
		return $this->controllerNamespace;
	}

	public function get() {
		return [
			[
				self::NAME => 'Index page calls this action',
				self::METHOD => [self::GET],
				self::PATTERN => '/',
				self::CONTROLLER => $this->controllerNamespace . 'Index::index'
			],
			[
				self::NAME => 'Login for authentication',
				self::METHOD => [self::POST],
				self::PATTERN => '/login',
				self::CONTROLLER => $this->controllerNamespace . 'Authentication::login'
			],
			[
				self::NAME => 'Blog related actions',
				self::METHOD => [self::GET],
				self::PATTERN => '/posts',
				self::CONTROLLER => $this->controllerNamespace . 'Post::posts'
			],
		];
	}
}
