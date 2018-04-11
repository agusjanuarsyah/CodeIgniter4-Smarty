<?php namespace App\Smarty;

use CodeIgniter\Config\BaseConfig;

class Config extends BaseConfig
{
	/**
	 *---------------------------------------------------------------
	 * TEMPLATE DIRECTORY
	 *---------------------------------------------------------------
	 *
	 * This variable must contain the name of your "template directory" folder.
	 *
	 * @var string
	 */
	public $templateDir = APPPATH . 'views';
	
	/**
	 *---------------------------------------------------------------
	 * COMPILE DIRECTORY
	 *---------------------------------------------------------------
	 *
	 * This variable must contain the name of your "compile directory" folder.
	 *
	 * @var string
	 */
	public $compileDir = APPPATH . 'views/templates_c';		
	
	/**
	 *---------------------------------------------------------------
	 * CONFIG DIRECTORY
	 *---------------------------------------------------------------
	 *
	 * This variable must contain the name of your "config directory" folder.
	 *
	 * @var string
	 */
	public $configDir = APPPATH . 'views/configs';
	
	/**
	 *---------------------------------------------------------------
	 * CACHE DIRECTORY
	 *---------------------------------------------------------------
	 *
	 * This variable must contain the name of your "cache directory" folder.
	 *
	 * @var string
	 */
	public $cacheDir = APPPATH . 'views/cache';
}
