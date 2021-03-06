<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * View for Forum Post Edit
 *
 * @package    MG/Forum
 * @category   View
 * @author     Modular Gaming
 * @copyright  (c) 2013 Modular Gaming
 * @license    BSD http://www.modulargaming.com/license
 */
class MG_View_Forum_Post_Edit extends Abstract_View_Forum_Post {

	public function title()
	{
		return 'Editing post #'.$this->post->id;
	}

	public function post()
	{
		$post = $this->post->as_array();
		return $post;
	}

	protected function get_breadcrumb()
	{
		return array_merge(parent::get_breadcrumb(), array(
			array(
				'title' => 'Edit #'.$this->post->id,
				'href' => Route::url('forum.post', array(
					'action' => 'edit',
					'id'     => $this->post->id,
				))
			)
		));
	}


}
