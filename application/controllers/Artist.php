<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artist extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('artist_model','artist');
		$this->load->model('ion_auth_model','ion_auth');
		$this->load->library('locations');
		$this->load->helper('form');
				$this->load->helper('url'); //Just for the examples, this is not required thought for the library

				$this->load->library('image_CRUD');






		$this->lang->load('auth');
	}

	/**
	 * Index Page for the  artist controller.
	 *
	 *
	 */
	public function index($id){	

		$data['can_edit'] = false;

		$my_id = $this->ion_auth->user()->row();

		if(!empty($my_id)){
			if($this->ion_auth->can_edit($my_id->id,$id))
				$data['can_edit'] = true;
		}



		//check if user is updating profile picture
		if(!empty($_FILES['input_profile_picture']['name']) && $this->ion_auth->can_edit($my_id->id,$id)){

		 	$config['upload_path'] = 'photos/'.$id;
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['file_name'] = 'profile_picture';
      $config['overwrite'] = true;
      $this->load->library('upload', $config);
      $this->upload->do_upload('input_profile_picture');
      $data_upload_files = $this->upload->data();
      $image = $config['upload_path'].'/'.$data_upload_files['file_name'];





		}

		//check if user is updating tattoo picture
		if(!empty($_FILES['input_tattoo_cover']['name']) && $this->ion_auth->can_edit($my_id->id,$id)){

			 		$config['upload_path'] = 'photos/'.$id;
         $config['allowed_types'] = 'gif|jpg|png|jpeg';
         $config['file_name'] = 'tattoo_cover';
         $config['overwrite'] = true;
         $this->load->library('upload', $config);
         $this->upload->do_upload('input_tattoo_cover');
         $data_upload_files = $this->upload->data();
         $image = $config['upload_path'].'/'.$data_upload_files['file_name'];


		}

		//check if user is updating sketch picture
		if(!empty($_FILES['input_sketch_cover']['name']) && $this->ion_auth->can_edit($my_id->id,$id)){

			 		$config['upload_path'] = 'photos/'.$id;
         $config['allowed_types'] = 'gif|jpg|png|jpeg';
         $config['file_name'] = 'sketch_cover';
         $config['overwrite'] = true;
         $this->load->library('upload', $config);
         $this->upload->do_upload('input_sketch_cover');
         $data_upload_files = $this->upload->data();	
         $image = $config['upload_path'].'/'.$data_upload_files['file_name'];


		}
		if(isset($image)){
		$this->artist->update_artist_profile($id,$image,$config['file_name']);
		}



		$artist_profile = $this->artist->get_profile_info($id);


		//GALLERY

		$image_crud = new image_CRUD();
	
		$image_crud->set_primary_key_field('id');
		$image_crud->set_url_field('url');
		$image_crud->set_table('example_3')
		->set_ordering_field('priority')
		->set_image_path('assets/uploads');
			
		
			
		$data['output'] = $image_crud->render();

		$image_crud = new image_CRUD();
		
		$image_crud->unset_upload();
		$image_crud->unset_delete();
		
		$image_crud->set_primary_key_field('id');
		$image_crud->set_url_field('url');
		$image_crud->set_table('example_3')
		->set_image_path('assets/uploads');
		
		$data['output2'] = $image_crud->render();
		


		//Computing styles (EDIT)
		$artist_profile->styles = 'All';


		$data['title'] = $artist_profile->first_name.' '.$artist_profile->last_name;
		$data['section_title'] = 'tattoo artist';
		$data['v'] = 'artist_view';
		$data['artist_profile'] = $artist_profile;
		$this->load->view('template', $data);

	}


	function _remap($parameter){

        $this->index($parameter);

	}
}

