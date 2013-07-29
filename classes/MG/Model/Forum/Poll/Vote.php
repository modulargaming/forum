<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Forum Poll Vote Model.
 *
 * @package    MG/Forum
 * @category   Model
 * @author     Modular Gaming Team
 * @copyright  (c) 2012-2013 Modular Gaming Team
 * @license    BSD http://modulargaming.com/license
 */
class MG_Model_Forum_Poll_Vote extends ORM {


	protected $_table_columns = array(
		'id'          => NULL,
		'poll_id'       => NULL,
		'option_id'    => NULL,
		'user_id'    => NULL
	);

	protected $_belongs_to = array(
		'poll' => array(
			'model' => 'Forum_Poll',
			'foreign_key' => 'poll_id',
		),
	);

	public function create_vote($values, $expected)
	{
		// Validation for vote
		$extra_validation = Validation::Factory($values)
			->rule('poll_id', 'Model_Forum_Poll::poll_exists')
			->rule('option_id', 'Model_Forum_Poll_Option::option_exists');
 		return $this->values($values, $expected)
			->create($extra_validation);
	}

}
