<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Abstract base controller for forum.
 *
 * @package    MG/Forum
 * @category   Controller
 * @author     Modular Gaming
 * @copyright  (c) 2013 Modular Gaming
 * @license    BSD http://www.modulargaming.com/license
 */
class MG_Abstract_Controller_Forum extends Abstract_Controller_Frontend {

	protected $protected = FALSE;

	/**
	 * @var array Forum config array.
	 */
	protected $config;

	public function before()
	{
		$this->config = Kohana::$config->load('forum');

		// Set forum to protected if we do not allow guests.
		// TODO: improve this check, database based depending on category?
		// Perhapse we should use policies?
		if ($this->protected === FALSE AND $this->config['guest'] === FALSE)
		{
			$this->protected = TRUE;
		}

		parent::before();

		// TODO: Check if user can view forum?
	}

}
