<?php
/**
 * Creator: Ivo Stefanov
 * Date: 18.12.2015 г.
 * Type:
 */
namespace Blog\Api;

use Blog\Application\PostService;
use Blog\Config\Container;
use Blog\Infrastructure\Common\ViewModel\JsonWrapper;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class Post {
	/**
	 * @var PostService
	 */
	private $postService;

	/**
	 * Post constructor.
	 * @param PostService $postService
	 */
	public function __construct(PostService $postService = null) {
		// TODO here the post service should be injected instead
	}


	public function posts(Request $request, Application $app) {
		$this->postService = $app[Container::POST_SERVICE];

		$postViewModels = $this->postService->listAllPosts();

		$posts = [];
		foreach($postViewModels as $postViewModel) {
			$posts[] = $postViewModel->serialize();
		}

		return $app->json(
			(new JsonWrapper)->generateSuccessObject($posts)
		);
	}
}
