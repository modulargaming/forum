<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Abstract view for forum poll.
 *
 * @package    MG/Forum
 * @category   View
 * @author     Modular Gaming
 * @copyright  (c) 2013 Modular Gaming
 * @license    BSD http://www.modulargaming.com/license
 */ 
class MG_Abstract_View_Forum_Poll extends Abstract_View_Forum_Topic {

	protected function get_breadcrumb()
	{
		$category = $this->topic->category;

		return array_merge(parent::get_breadcrumb(), array(
			array(
				'title' => 'Poll',
				'href'  => Route::url('forum.poll', array('id' => $this->topic->id))
			)
		));
	}

}
