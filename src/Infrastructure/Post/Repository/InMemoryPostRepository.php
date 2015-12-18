<?php
/**
 * Creator: Ivo Stefanov
 * Date: 18.12.2015 г.
 * Type:
 */
namespace Blog\Infrastructure\Post\Repository;

use Blog\Domain\Post\NullCommentId;
use Blog\Domain\Post\Post;
use Blog\Domain\User\User;
use Blog\Domain\User\Email;
use Blog\Domain\Post\PostId;
use Blog\Domain\User\UserId;
use Blog\Domain\Post\Comment;
use Blog\Domain\Post\CommentId;
use Blog\Domain\Post\PostRepository;

class InMemoryPostRepository implements PostRepository {
	/**
	 * @var Post[] some in memory posts
	 */
	private $posts;

	/**
	 * In a Database Repository there is a builder that "reconstitutes" this kind of information into objects
	 * InMemoryPostRepository constructor.
	 */
	public function __construct() {
		$this->posts = [
			new Post(
				new PostId(1),
				new User (
					new UserId(1),
					new Email('ivo.stefanov@gmail.com'),
					'Ivo Stefanov'
				),
				'20 Myths About Tsunami',
				'THE sun had set just a few minutes earlier. On this tranquil Friday, July 17, 1998, the men, women, and children of several small villages on the northern coast of Papua New Guinea were suddenly shaken by a magnitude-7.1 earthquake. “The main shock,” says Scientific American, “rocked 30 kilometers (nearly 19 miles) of coastline . . . and suddenly deformed the offshore ocean bottom. The normally flat sea surface lurched upward in response, giving birth to a fearsome tsunami.',
				[
					new Comment(
						new CommentId(1), new NullCommentId, new UserId(1), 'That is total BS'
					),
					new Comment(
						new CommentId(2), new CommentId(1), new UserId(2), 'You can\'t be sure about that'
					),
					new Comment(
						new CommentId(3), new CommentId(1), new UserId(1), 'Yes I am!'
					)
				]
			)
		];
	}
	/**
	 * Retrieves a single post by its Id
	 * @param PostId $postId
	 * @return Post
	 */
	public function find(PostId $postId) {
		foreach($this->posts as $post) {
			if($post->getId()->equals($postId)) {
				return $post;
			}
		}

		return null;
	}

	/**
	 * Retrieves all users
	 * @return Post[]
	 */
	public function findAll() {
		return $this->posts;
	}
}
