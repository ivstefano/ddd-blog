<?php
/**
 * Creator: Ivo Stefanov
 * Date: 18.12.2015 г.
 * Type:
 */
namespace Blog\Domain\Post;

interface PostRepository {
	/**
	 * Retrieves a single post by its Id
	 * @param PostId $postId
	 * @return Post
	 */
	public function find(PostId $postId);

	/**
	 * Retrieves all users
	 * @return Post[]
	 */
	public function findAll();
}
