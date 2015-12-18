<?php
/**
 * Creator: Ivo Stefanov
 * Date: 18.12.2015 г.
 * Type:
 */
namespace Blog\Infrastructure\Post\ViewModel;

use Blog\Domain\Post\Comment;
use Blog\Infrastructure\Common\ViewModel\ViewModel;

class CommentViewModel implements ViewModel {
	/**
	 * @var Comment single user comment
	 */
	private $comment;

	/**
	 * @param Comment $comment
	 * @return CommentViewModel
	 */
	public function setComment($comment) {
		$this->comment = $comment;
		return $this;
	}

	/**
	 * Converts a domain model into an array
	 * @return array
	 */
	public function serialize() {
		return [
			'id' => $this->comment->getId()->getValue(),
			'parent' => $this->comment->getParentId()->getValue(),
			'body' => $this->comment->getBody()
		];
	}
}