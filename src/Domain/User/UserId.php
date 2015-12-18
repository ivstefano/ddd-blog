<?php
/**
 * Creator: Ivo Stefanov
 * Date: 15.12.2015 г.
 * Type: Value Object
 */
namespace Blog\Domain\User;

use Blog\Domain\Common\Identical;

class UserId implements Identical{
	/**
	 * @var integer the value of the user id
	 */
	private $value;

	/**
	 * UserId constructor.
	 * @param int $value
	 */
	public function __construct($value) {
		$this->value = strval($value);
	}

	/**
	 * @return int
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * Returns true if the given object is equal to the one invoked on
	 * @param mixed $userId
	 * @return bool
	 */
	public function equals($userId) {
		return $userId instanceof UserId && $userId->getValue() == $this->getValue();
	}
}
