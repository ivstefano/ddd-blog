<?php
/**
 * Creator: Ivo Stefanov
 * Date: 18.12.2015 г.
 * Type:
 */
namespace Blog\Application;
use Blog\Domain\Post\PostRepository;
use Blog\Infrastructure\Post\ViewModel\PostViewModel;

class PostService {
	/**
	 * @var PostRepository the repository that retrieves the posts
	 */
	private $postRepository;

	/**
	 * PostsService constructor.
	 * @param PostRepository $postRepository
	 */
	public function __construct(PostRepository $postRepository) {
		$this->postRepository = $postRepository;
	}

	/**
	 * @return PostViewModel[]
	 */
	public function listAllPosts() {
		$posts = $this->postRepository->findAll();

		$postViewModels = [];
		foreach($posts as $post) {
			$postViewModels[] = new PostViewModel($post);
		}

		return $postViewModels;
	}
}
