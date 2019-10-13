<?php namespace App\Smarty;

require_once( APPPATH.'Smarty/libs/SmartyBC.class.php' );

class Smarty extends \Smarty
{
	protected $config;
	
	public function __construct() 
	{
		parent::__construct();
		
		if ($this->config !== $this->config instanceof \App\Smarty\Config)
		{
			$this->config = new \App\Smarty\Config();
		}
				
		$this->template_dir = $this->config->templateDir;		
		$this->compile_dir = $this->config->compileDir;		
		$this->config_dir = $this->config->configDir;
		$this->cache_dir = $this->config->cacheDir;
		
		/*$this->assign( 'APPPATH', APPPATH );
		$this->assign( 'BASEPATH', BASEPATH );*/
		$this->assign([
		    'APPPATH' => APPPATH,
		    'ROOTPATH' => ROOTPATH
		]);
			
		$this->force_compile = true;
		$this->caching = \Smarty::CACHING_LIFETIME_CURRENT;
		$this->cache_lifetime = 520;
		
	}
	
	public function view(string $view, array $options = null) 
	{
		return $this->fetch($view);
	}
	
	public function setData(array $data = [])
	{
		/*foreach ($data as $key => $value)
		{
			$this->assign($key, $value);
		}*/
		if (!empty($data)) {
			$this->assign($data);
		}
		
		return $this;
	}
}
