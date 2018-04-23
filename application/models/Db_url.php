<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Db_url extends CI_Model {
	
	  public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }
	 public function get_url($short_url) {
        $this->db->select(array('id','user_link'));
		$array = array('short_url' => $short_url);
		$this->db->where($array);
		$this->db->from('link_address');
		$query = $this->db->get();
		$res=$query->result();
		if(!empty($res)){
			$this->update_counter($res[0]->id);
			return $res[0]->user_link;
		}else{
			return FALSE;
		}
    }
	 
	 
	 public function set_url($user_url){
		  $this->db->select(array('user_link','short_url'));
		$array = array('user_link' => $user_url);
		$this->db->where($array);
		$this->db->from('link_address');
		$query = $this->db->get();
		$res=$query->result();
		if(!empty($res)){
			return $res[0]->short_url;
		}else{
			$short_url=$this->generate_link($user_url);
			 $data = array(
				'user_link' => $user_url,
				'short_url' =>$short_url
			);

		 $this->db->insert('link_address', $data);
		 $insert_id = $this->db->insert_id();
		
		 if($insert_id){
			 $this->db->query("INSERT INTO link_counter (link_id,counter) VALUES ('".$insert_id."','0') ");
			return $short_url;
		 }
		 else{
			 Return FALSE;
		 }
		}
	 }
	 
	 private function generate_link(){
		
			$chars = "bcdfghjklmnpqrstvwxyz";
			$chars .= "BCDFGHJKLMNPQRSTVWXYZ";
			$chars .= "0123456789";
			while(1){
				$key = '';
				srand((double)microtime()*1000000);
				for($i = 0; $i < 4; $i++){
					$key .= substr($chars,(rand()%(strlen($chars))), 1);
				}
				break;
			}
			return $key;
		
		 
	 }
	 
	 private function update_counter($id){
		$this->db->where('link_id', $id);
		$this->db->set('counter', 'counter+1', FALSE);
		$this->db->update('link_counter');
	 }
	 
	 function get_link_counter(){
		 $this->db->select(array('link_address.user_link','link_address.short_url','link_counter.counter'));
         $this->db->from('link_address');
         $this->db->join('link_counter', 'link_counter.link_id = link_address.id');
		 $this->db->order_by('link_counter.counter','DESC');
		 $this->db->limit(100,0);
		 $query = $this->db->get();
		 return $query->result();
		 //$this->db->last_query();
		 
	 }
	
}
