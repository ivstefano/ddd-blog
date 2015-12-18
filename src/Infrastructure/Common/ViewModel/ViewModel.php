<?php
/**
 * Creator: Ivo Stefanov
 * Date: 18.12.2015 г.
 * Type:
 */
namespace Blog\Infrastructure\Common\ViewModel;

interface ViewModel {
	/**
	 * Converts a domain model into an array
	 * @return mixed
	 */
	public function serialize();
}