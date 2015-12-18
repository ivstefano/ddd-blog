<?php
/**
 * Creator: Ivo Stefanov
 * Date: 18.12.2015 г.
 * Type:
 */
namespace Blog\Domain\Post;

class CommentId {
	/**
	 * @var string the id of the comment
	 */
	private $value;

	/**
	 * BlogId constructor.
	 * @param $value
	 */
	public function __construct($value) {
		$this->value = strval($value);
	}

	/**
	 * @return mixed
	 */
	public function getValue() {
		return $this->value;
	}
}
