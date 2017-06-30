<?php
/**
* Frontend Controller
*/
class Frontend_Controller extends MY_Controller
{
	
	function __construct()
	{
		# code...
		parent:: __construct();
		var_dump('Hello fron the Frontend Controller');
	}
}