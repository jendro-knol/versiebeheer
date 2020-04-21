<?php

/**
 * 
 */
class ExampleLessonView
{
	private $output = '';

	function getHeader()
	{
		$this->output .= include_once('header.html');
	}

	function getBody($output)
	{
		$this->output .= include('content.php');
	}

	function getFooter()
	{
		$this->output .= include_once('footer.html');
	}

	function dump($var)
	{
        ob_start();
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
        return PHP_EOL . ob_get_clean();
	}

	function display($content = null)
	{
		$this->getHeader();
		$this->getBody('test');
		$this->getBody($this->dump('hallo'));
		$this->getFooter();
	}
}