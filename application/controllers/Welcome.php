<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	
	public function index($short_link=Null)
	{
		if($short_link==Null){
			$this->load->view('header');
			$this->load->view('welcome_message');
		}
		else{
			
			$this->load->model('Db_url');
			$url=$this->Db_url->get_url($short_link);
			if(!$url){
				echo "404";
			}else{
			redirect($url);
			}
		}
	
	}
	
	public function setlink(){
		$this->load->model('Db_url');
		$user_url=strtolower($this->input->post('user_url'));
	    $user_url = rtrim(str_replace('http://', '', $user_url), " /"); 
		if (parse_url($user_url, FILTER_VALIDATE_URL)) { 
			// you're good
			$url=$this->Db_url->set_url($user_url);
			if($url){
			echo "<a href='".base_url().$url."' target='_blabk'>".base_url().$url.'</a>';
			}else{
				echo "Something Went Wrong. Please try again";
			}
		}else{
			echo "invalid-url";
		}
		
		

	}
		
	public function top_board(){
		$this->load->model('Db_url');
		$counter=$this->Db_url->get_link_counter();
		$data['all_counts']=$counter;
		$this->load->view('header');
	    $this->load->view('top_link_board',$data);

	}
	
	
	
}






