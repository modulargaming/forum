<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Abstract view for forum topic.
 *
 * @package    MG/Forum
 * @category   View
 * @author     Modular Gaming
 * @copyright  (c) 2013 Modular Gaming
 * @license    BSD http://www.modulargaming.com/license
 */
class MG_Abstract_View_Forum_Topic extends Abstract_View_Forum {

	/**
	 * @var Model_Forum_Topic Topic
	 */
	public $topic;

	protected function get_breadcrumb()
	{
		$category = $this->topic->category;

		return array_merge(parent::get_breadcrumb(), array(
			array(
				'title' => $category->title,
				'href'  => Route::url('forum.category', array('id' => $category->id))
			),
			array(
				'title' => $this->topic->title,
				'href'  => Route::url('forum.topic', array('id' => $this->topic->id))
			)
		));
	}

}
