<?php 
	/**
	 * 
	 */
	class catagory_model extends CI_Model{
		
		public function __construct(){
			$this->load->database();
		}
		public function get_catagories(){
			$this->db->order_by('name');
			$query = $this->db->get('catagories');
			return $query->result_array();
		}

		public function create_catagory(){
			$data = array(
				'name' => $this->input->post('name')
			);
			return $this->db->insert('catagories',$data);
		}
		public function get_catagory($id){
			$query = $this->db->get_where('catagories',array('id'=>$id));
			return $query->row();
 		}
	}
 ?>