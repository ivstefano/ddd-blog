<?php
/**
 * Creator: Ivo Stefanov
 * Date: 18.12.2015 г.
 * Type:
 */
namespace Blog\Domain\Post;

use Blog\Domain\User\UserId;

class Comment {
	/**
	 * @var CommentId the id of the comment
	 */
	private $id;

	/**
	 * @var CommentId the id of the parent comment
	 */
	private $parentId;

	/**
	 * @var UserId the id of the user who owns the comment
	 */
	private $ownerId;

	/**
	 * @var string the body of the comment
	 */
	private $body;

	/**
	 * @var UserId[] the users who liked the post
	 */
	private $usersWhoLiked;

	/**
	 * Comment constructor.
	 * @param CommentId $id
	 * @param CommentId $parentId
	 * @param UserId $ownerId
	 * @param string $body
	 * @param \Blog\Domain\User\UserId[] $usersWhoLiked
	 */
	public function __construct(CommentId $id, CommentId $parentId, UserId $ownerId, $body, array $usersWhoLiked = []) {
		$this->id = $id;
		$this->parentId = $parentId;
		$this->ownerId = $ownerId;
		$this->body = $body;
		$this->usersWhoLiked = $usersWhoLiked;
	}

	/**
	 * @return CommentId
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return CommentId
	 */
	public function getParentId() {
		return $this->parentId;
	}

	/**
	 * @return UserId
	 */
	public function getOwnerId() {
		return $this->ownerId;
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
	public function getUsersWhoStarred() {
		return $this->usersWhoLiked;
	}

	/**
	 * When a user likes the post add him to the list
	 * @param UserId $user
	 */
	public function userLiked(UserId $user) {
		$this->usersWhoLiked[] = $user;
	}

	/**
	 * Removes the user id from the likes list
	 * @param UserId $userId
	 */
	public function userRemovedLike(UserId $userId) {
		foreach($this->usersWhoLiked as $userWhoLiked) {
			if($userWhoLiked->equals($userId)) {
				unset($userWhoLiked);
				return;
			}
		}
	}
}
