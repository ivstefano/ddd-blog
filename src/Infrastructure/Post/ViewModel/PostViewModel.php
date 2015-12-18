<?php
/**
 * Creator: Ivo Stefanov
 * Date: 18.12.2015 г.
 * Type:
 */
namespace Blog\Infrastructure\Post\ViewModel;

use Blog\Domain\Post\Post;
use Blog\Infrastructure\Common\ViewModel\ViewModel;

class PostViewModel implements ViewModel {

	/**
	 * @var Post the domain model to be displayed
	 */
	private $post;

	/**
	 * PostViewModel constructor.
	 * @param Post $post
	 */
	public function __construct(Post $post) {
		$this->post = $post;
	}

	/**
	 * Converts a domain model into an array
	 * @return array
	 */
	public function serialize() {
		$comments = [];
		$commentViewModel = new CommentViewModel;
		foreach($this->post->getComments() as $comment) {
			$comments[] = $commentViewModel->setComment($comment)->serialize();
		}

		return [
			'id' => $this->post->getId()->getValue(),
			'owner' => $this->post->getOwner()->getNick(),
			'title' => $this->post->getTitle(),
			'body' => $this->post->getBody(),
			'comments' => $comments
		];
	}
}
