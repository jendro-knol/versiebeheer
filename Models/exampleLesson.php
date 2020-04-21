<?php

/**
 * 
 */
class ExampleLessonModel
{
	public $db;

	function __construct()
	{
		try {
			$this->db = new PDO("mysql:host=localhost;dbname=garage" ,'root', 'root');
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
	}

	function create()
	{

	}
	
	function read($query = '')
	{
		$sth = $this->db->prepare($query);
		$sth->execute();
		return $sth;
	}

	function update()
	{

	}

	function delete()
	{

	}

}