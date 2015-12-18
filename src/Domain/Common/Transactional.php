<?php
/**
 * Creator: Ivo Stefanov
 * Date: 15.12.2015 г.
 * Type:
 */
namespace Blog\Domain\Common;

interface Transactional {
	/**
	 * Starts a transaction
	 */
	public function begin();

	/**
	 * Finishes a started transaction
	 */
	public function commit();

	/**
	 * Reverts changes from started transaction
	 */
	public function rollBack();
}
