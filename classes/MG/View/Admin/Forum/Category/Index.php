<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * View for Admin Forum Category Index
 *
 * @package    MG/Forum
 * @category   View
 * @author     Modular Gaming Team
 * @copyright  (c) 2013 Modular Gaming Team
 * @license    BSD http://modulargaming.com/license
 */

class MG_View_Admin_Forum_Category_Index extends Abstract_View_Admin {

	public $title = 'Forum Categories';

	public function categories()
	{
		$categories = array();

		foreach ($this->categories as $category)
		{
			$categories[] = array(
				'id'          => $category->id,
				'title'        => $category->title,
				'description' => $category->description,
				'locked'      => (bool) $category->locked
			);
		}

		return $categories;
	}

}
