<?php
/**
 * Creator: Ivo Stefanov
 * Date: 18.12.2015 г.
 * Type:
 */
namespace Blog\Domain\Post;

use Blog\Domain\Common\Identical;

class PostId implements Identical{
	/**
	 * @var string the id of the blog
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

	/**
	 * Returns true if the given object is equal to the one invoked on
	 * @param PostId $object mixed the compared object
	 * @return boolean
	 */
	public function equals($object) {
		return $object instanceof PostId && $object->getValue() == $this->getValue();
	}
}
