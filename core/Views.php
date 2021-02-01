<?php 
namespace Core\Views;

class Render 
{

	public $template;
	public $data;

	public function __construct($template, $data) 
	{
		$this->template = $template;
		$this->data = $data;
		return true;
	}

	public function view() 
	{
		return true;
	}
}