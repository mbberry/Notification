<?php
/**
 * Comment author IP merge tag
 *
 * @package notification
 */

namespace BracketSpace\Notification\Defaults\MergeTag\Comment;

use BracketSpace\Notification\Defaults\MergeTag\IPTag;


/**
 * Comment author IP merge tag class
 */
class CommentAuthorIP extends IPTag {

	/**
	 * Trigger property to get the comment data from
	 *
	 * @var string
	 */
	protected $property_name = 'comment';

	/**
	 * Merge tag constructor
	 *
	 * @since 5.0.0
	 * @param array $params merge tag configuration params.
	 */
	public function __construct( $params = [] ) {

		if ( isset( $params['property_name'] ) && ! empty( $params['property_name'] ) ) {
			$this->property_name = $params['property_name'];
		}

		$args = wp_parse_args(
			$params,
			[
				'slug'        => 'comment_author_IP',
				'name'        => __( 'Comment author IP', 'notification' ),
				'description' => '127.0.0.1',
				'example'     => true,
				'resolver'    => function( $trigger ) {
					return $trigger->{ $this->property_name }->comment_author_IP;
				},
				// translators: comment type author.
				'group'       => sprintf( __( '%s author', 'notification' ), ucfirst( $this->property_name ) ),
			]
		);

		parent::__construct( $args );

	}

	/**
	 * Function for checking requirements
	 *
	 * @return boolean
	 */
	public function check_requirements() {
		return isset( $this->trigger->{ $this->property_name }->comment_author_IP );
	}

}
