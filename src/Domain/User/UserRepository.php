<?php
/**
 * Creator: Ivo Stefanov
 * Date: 15.12.2015 г.
 * Type: Repository
 */
namespace Blog\Domain\User;

interface UserRepository {

	/**
	 * Retrieves a single user by his Id
	 * @param UserId $userId
	 * @return User
	 */
	public function find(UserId $userId);

	/**
	 * Retrieves all users
	 * @return User[]
	 */
	public function findAll();

	/**
	 * Creates or updates a user and returns his Id
	 * @param User $user
	 * @return UserId
	 */
	public function save(User $user);

	/**
	 * Removes a user by his Id
	 * @param UserId $userId
	 */
	public function remove(UserId $userId);
}
