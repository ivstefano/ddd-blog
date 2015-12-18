<?php
/**
 * Creator: Ivo Stefanov
 * Date: 18.12.2015 г.
 * Type:
 */
namespace Blog\Domain\Post;

use Blog\Domain\User\User;

class Post {
	/**
	 * @var PostId the id of the blog post
	 */
	private $id;

	/**
	 * @var User user
	 */
	private $owner;

	/**
	 * @var string the title of the blog post
	 */
	private $title;

	/**
	 * @var string the body of the blog post
	 */
	private $body;

	/**
	 * @var
	 */
	private $comments;

	/**
	 * Post constructor.
	 * @param PostId $id
	 * @param User $owner
	 * @param string $title
	 * @param string $body
	 * @param $comments
	 */
	public function __construct(PostId $id, User $owner, $title, $body, $comments) {
		$this->id = $id;
		$this->owner = $owner;
		$this->title = $title;
		$this->body = $body;
		$this->comments = $comments;
	}

	/**
	 * @return PostId
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @return string
	 */
	public function getBody() {
		return $this->body;
	}

	/**
	 * @return mixed
	 */
	public function getComments() {
		return $this->comments;
	}

	/**
	 * @return User
	 */
	public function getOwner() {
		return $this->owner;
	}
}