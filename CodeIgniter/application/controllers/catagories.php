<?php 
	class catagories extends CI_Controller{

		public function index(){
			$data['title'] = 'Catagories';

			$data['catagories'] = $this->catagory_model->get_catagories();

			$this->load->view('templates/header');
			$this->load->view('catagories/index',$data);
			$this->load->view('templates/footer');

		}
		
		public function create(){
			$data['title'] = 'create catagory';
			$this->form_validation->set_rules('name','name','required');

			if ($this->form_validation->run() == FALSE) {

				$this->load->view('templates/header');
				$this->load->view('catagories/create',$data);
				$this->load->view('templates/footer');


			}else{
				$this->catagory_model->create_catagory();
				redirect('catagories');
			}
		}
		public function posts($id){
			$data['title'] = $this->catagory_model->get_catagory($id)->name;

			$data['posts'] = $this->post_model->get_posts_by_catagory($id);
			$this->load->view('templates/header');
			$this->load->view('posts/index',$data);
			$this->load->view('templates/footer');
		}

	}
 ?>