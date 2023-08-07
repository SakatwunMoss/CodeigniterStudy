<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends CI_Controller {

	public function index()
	{
		$this->load->database();
		$query = $this->db->query('SELECT name FROM sample');
		foreach ($query->result() as $row)
		{
			echo $row->name . '<br />';
		}
		echo 'Total Results: ' . $query->num_rows();
	}


	public function test()
	{
		$this->load->database();
		$query = $this->db->query('SELECT slug FROM news');
		foreach ($query->result() as $row)
		{
			echo $row->slug . '<br />';
		}
		echo 'Total Results of news: ' . $query->num_rows();

		$query = $this->db->query('SELECT text FROM news');
		foreach ($query->result() as $row)
		{
			echo $row->text . '<br />';
		}
		echo 'Total Results of news: ' . $query->num_rows();
	}

	public function create()
	{
		$this->load->database();
		$query = $this->db->query('CREATE TABLE news (
			id int(11) NOT NULL AUTO_INCREMENT,
			title varchar(128) NOT NULL,
			slug varchar(128) NOT NULL,
			text text NOT NULL,
			PRIMARY KEY (id),
			KEY slug (slug)
			);');
		
		$query = $this->db->query('INSERT INTO news(id,title,slug,text) VALUES (1,"タイトル1","slug1","text1");');
		$query = $this->db->query('INSERT INTO news(id,title,slug,text) VALUES (2,"タイトル2","slug2","text2");');
		$query = $this->db->query('INSERT INTO news(id,title,slug,text) VALUES (3,"タイトル3","slug3","text3");');
		$query = $this->db->query('INSERT INTO news(id,title,slug,text) VALUES (4,"タイトル4","slug4","text4");');
		//echo 'Result: '.$query->result();
		echo 'maybe created and inserted';
	}
}
