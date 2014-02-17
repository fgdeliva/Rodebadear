<?php

class M_search extends CI_Model{

	function search_books($search_term='default')
	{

		$filter = $this->input->post('filter');
		//echo $filter;

		if($filter == 'title')
		{
			echo 'title';
			$this->db->select('*');
			$this->db->from('book');
			$this->db->like('title',$search_term);
			// Execute the query.
			$query = $this->db->get();
			return $query->result_array();

		}else if($filter == 'author')
		{
			echo 'author';
			$this->db->select('*');
			$this->db->from('book');
			$this->db->like('author',$search_term);
			// Execute the query.
			$query = $this->db->get();
			return $query->result_array();

		}else if($filter == 'type')
		{
			echo 'type';
			$this->db->select('*');
			$this->db->from('book');
			$this->db->like('book_type',$search_term);
			// Execute the query.
			$query = $this->db->get();
			return $query->result_array();

		}else if($filter == 'status')
		{
			echo 'status';
			$this->db->select('*');
			$this->db->from('book');
			$this->db->like('book_status',$search_term);
			// Execute the query.
			$query = $this->db->get();
			return $query->result_array();
		}else
		{
			echo 'all';
			$this->db->select('*');
			$this->db->from('book');
			$this->db->like('book_status',$search_term);
			$this->db->or_like('book_type',$search_term);
			$this->db->or_like('author',$search_term);
			$this->db->or_like('title',$search_term);
			// Execute the query.
			$query = $this->db->get();
			return $query->result_array();
		}
	
	}

	function test_books($search_term)
	{
		$query = $this->db->query("SELECT * FROM book WHERE call_no = '{$search_term}'");

		// Execute the query.
		$rows = $query->row();
		return $rows;
	}
}