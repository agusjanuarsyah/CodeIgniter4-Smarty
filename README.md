# CodeIgniter4-Smarty

Using Smarty Template Engine in CodeIgniter4

## Folder Structure
```
+-- CodeIgniter4
   |
   +-- application
       |
       +--- ....
       +--- Smarty
       +--- ....	
```

## Configuration
set variable in file Config.php
```
public $templateDir = APPPATH . 'views';
public $compileDir = APPPATH . 'views/templates_c';	
public $cacheDir = APPPATH . 'views/caches';
public $configDir = APPPATH . 'views/configs';
```

## Example: #1 
```
<?php namespace App\Controllers;

use CodeIgniter\Controller;

use App\Smarty\Smarty;
class Home extends Controller
{
	private $smarty;
	
	public function index()
	{		
		$this->smarty = new Smarty();
	
		$this->smarty->assign("Name", "Fred Irving Johnathan Bradley Peppergill", true);
		$this->smarty->assign("FirstName", array("John", "Mary", "James", "Henry"));
		$this->smarty->assign("LastName", array("Doe", "Smith", "Johnson", "Case"));
		$this->smarty->assign("Class", array(array("A", "B", "C", "D"), array("E", "F", "G", "H"), array("I", "J", "K", "L"),
									    array("M", "N", "O", "P")));
										
		return $this->smarty->view('index.tpl');
		
		
	}
}
```
## Example: #2 
```
<?php namespace App\Controllers;

use CodeIgniter\Controller;
require_once( APPPATH.'Smarty/Common.php' );

class Home extends Controller
{
	private $smarty;
	
	public function index()
	{		
		
		$data = [
			"Name" => "Fred Irving Johnathan Bradley Peppergill",
			"FirstName" => [
				"John", 
				"Mary", 
				"James", 
				"Henry"
			],
			"LastName" => [
				"Doe", 
				"Smith", 
				"Johnson", 
				"Case"
			],
		];
		
		echo smarty('index.tpl', $data);
		
	}
}
```
Enjoyed....
