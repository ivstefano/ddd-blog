<?php
/**
 * Creator: Ivo Stefanov
 * Date: 15.12.2015 г.
 * Type: Entity
 */
namespace Blog\Domain\User;

class User {
	/**
	 * @var UserId
	 */
	private $id;

	/**
	 * @var Email the email address of the user
	 */
	private $email;

	/**
	 * @var string
	 */
	private $nick;

	/**
	 * User constructor.
	 * @param UserId $id
	 * @param Email $email
	 * @param string $nick
	 */
	public function __construct(UserId $id, Email $email, $nick) {
		$this->id = $id;
		$this->email = $email;
		$this->nick = $nick;
	}

	/**
	 * @return UserId
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return Email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @return string
	 */
	public function getNick() {
		return $this->nick;
	}
}
