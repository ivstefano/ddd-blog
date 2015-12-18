<?php
/**
 * Creator: Ivo Stefanov
 * Date: 15.12.2015 г.
 * Type: Value Object
 */
namespace Blog\Domain\User;

use Blog\Domain\Exception\InvalidEmailException;

class Email {
	/**
	 * @var string valid email address
	 */
	private $value;

	/**
	 * Email constructor.
	 * @param string $value
	 * @throws InvalidEmailException
	 */
	public function __construct($value) {
		$value = filter_var($value, FILTER_VALIDATE_EMAIL);
		if(!$value) {
			throw new InvalidEmailException();
		}

		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getValue() {
		return $this->value;
	}
}
