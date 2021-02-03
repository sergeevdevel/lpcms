<?php 
namespace Core\Views;

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFunction;


class Render 
{

	public $template;
	public $data;

	public $twig;

	public function __construct($template, $data) 
	{
		// \Twig\Twig_Autoloader::register();

		$templatepath = __DIR__ . '/../local/Views/templates/default/';
		$loader = new FilesystemLoader($templatepath);
		$this->twig = new Environment($loader, array(
		    'cache' => __DIR__ . '/../writable/cache',
		    'debug' => true
		));

	}

	public function view() 
	{
		return $this->twig->render('index.html', array('the' => 'variables', 'go' => 'here'));
	}
}