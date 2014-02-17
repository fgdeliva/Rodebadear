<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_index extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_search');
	}
	/** Index Page for this controller */
	public function index()
	{
		if($this->session->userdata('logged_in')){
			$this->load->view('v_user');	
		}	
		else{
			$this->load->view('v_index');	
		}
	}
	
	public function search()
	{
		$search_term = $this->input->post('word');
		$data['books'] = $this->m_search->search_books($search_term);
		$this->load->view('v_index',$data);
	}

	public function bookinfo()
	{
		if($this->session->userdata('logged_in')){
			$book = $_GET['t'];
			$data['item'] = $this->m_search->test_books($book);
			$this->load->view('v_bookinfo',$data);	
		}	
		else{
			// alert user to log in and redirect to previous page
			echo "<script>
			alert('Please log in.');
			history.go(-1);
			</script>";
		}
	}
}
/* End of file c_index.php */
/* Location: ./application/controllers/c_index.php */