<?php
/**
 * Creator: Ivo Stefanov
 * Date: 15.12.2015 г.
 * Type:
 */
namespace Blog\Infrastructure\Repository;

use Blog\Domain\User\Email;
use Blog\Domain\User\User;
use Blog\Domain\User\UserId;
use Blog\Domain\User\UserRepository;

class InMemoryUserRepository implements UserRepository{
	/**
	 * @var User[] some users created for display purposes
	 */
	private $users;

	/**
	 * This constructor generates a few users that are emulating database users
	 * InMemoryUserRepository constructor.
	 */
	public function __construct() {
		$this->users[] = new User(
			new UserId('1'),
			new Email('ivo.stefanov@gmail.com'),
			'ivo'
		);

		$this->users[] = new User(
			new UserId('2'),
			new Email('miro.bazitov@gmail.com'),
			'miro'
		);
	}

	/**
	 * Retrieves a single user by his Id
	 * @param UserId $userId
	 * @return User
	 */
	public function find(UserId $userId) {
		foreach($this->users as $user) {
			if($user->getId()->equals($userId)) {
				return $user;
			}
		}

		return null;
	}

	/**
	 * Retrieves all users
	 * @return User[]
	 */
	public function findAll() {
		return $this->users;
	}

	/**
	 * Creates or updates a user and returns his Id
	 * @param User $user
	 * @return UserId
	 */
	public function save(User $user) {
		$this->users[] = $user;
	}

	/**
	 * Removes a user by his Id
	 * @param UserId $userId
	 */
	public function remove(UserId $userId) {
		$user = $this->find($userId);
		unset($user);
	}
}
