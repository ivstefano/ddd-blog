<?php
/**
 * Creator: Ivo Stefanov
 * Date: 16.12.2015 г.
 * Type:
 */
namespace Blog\Domain\Common;

interface Identical {
	/**
	 * Returns true if the given object is equal to the one invoked on
	 * @param $object mixed the compared object
	 * @return boolean
	 */
	public function equals($object);
}
