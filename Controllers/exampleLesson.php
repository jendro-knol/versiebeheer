<?php

/**
 * 
 */
class ExampleLessonController
{

	private $model;
	private $view;

	private $html = '';
	private $list = [];

	function __construct()
	{
		$this->model = new ExampleLessonModel();
		$this->view = new ExampleLessonView();
	}

	function getQuery($table = 'cars')
	{
		$query = 'SELECT * FROM `'.$table.'`';
		$sth = $this->model->read($query);

		$rows = [];
		while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
			$rows[] = $row;
		}
		return $rows;
	}

	function addListItem($string)
	{
		$this->list[] = $string;
	}

	function html()
	{
		$this->addListItem('morgen is het weekend');
		$this->view->display($this->list);
	}

}