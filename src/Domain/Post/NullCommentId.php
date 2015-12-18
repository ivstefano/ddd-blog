<?php
/**
 * Creator: Ivo Stefanov
 * Date: 18.12.2015 г.
 * Type:
 */
namespace Blog\Domain\Post;

class NullCommentId extends CommentId
{
	/**
	 * NullCommentId constructor.
	 */
	public function __construct() {
		parent::__construct(null);
	}

	/**
	 * @return mixed
	 */
	public function getValue() {
		return null;
	}
}
