<?php
/**
 * Creator: Ivo Stefanov
 * Date: 16.12.2015 г.
 * Type:
 */
namespace Blog\Infrastructure\Repository;

use Blog\Domain\User\User;
use Blog\Domain\User\UserId;
use Blog\Domain\User\UserRepository;

class MySQLUserRepository implements UserRepository{

	/**
	 * Retrieves a single user by his Id
	 * @param UserId $userId
	 * @return User
	 */
	public function find(UserId $userId) {
		// TODO: Implement find() method.
	}

	/**
	 * Retrieves all users
	 * @return User[]
	 */
	public function findAll() {
		// TODO: Implement findAll() method.
	}

	/**
	 * Creates or updates a user and returns his Id
	 * @param User $user
	 * @return UserId
	 */
	public function save(User $user) {
		// TODO: Implement save() method.
	}

	/**
	 * Removes a user by his Id
	 * @param UserId $userId
	 */
	public function remove(UserId $userId) {
		// TODO: Implement remove() method.
	}
}
