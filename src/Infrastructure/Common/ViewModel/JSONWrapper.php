<?php
/**
 * Creator: Ivo Stefanov
 * Date: 18.12.2015 г.
 * Type:
 */
namespace Blog\Infrastructure\Common\ViewModel;

class JsonWrapper {
	/**
	 * Creates a wrapper that produces a json object
	 * @param array $data
	 * @return array
	 */
	public function generateSuccessObject(array $data) {
		return [
			'success' => true,
			'data' => $data,
			'message' => null
		];
	}

	/**
	 * Creates a wrapper that produces a json fail object
	 * @param $message string the error message
	 * @return array
	 */
	public function generateFailureObject($message) {
		return [
			'success' => true,
			'data' => [],
			'message' => $message
		];
	}
}
