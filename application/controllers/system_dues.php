<?php 

Class System_dues extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function index(){

		$query = $this->db->get('system_dues');
		$data['query'] = $query->result_array();

		$this->load->view('backend/system_dues/show', $data);
	}

	function add($param = ""){
        
		$this->load->view('backend/system_dues/system_dues');

		if ($param == 'create'){
			$data['system_due_name'] = $this->input->post('system_due_name');
			$data['system_due_desc'] = $this->input->post('system_due_desc');
			$data['class_id']        = $this->input->post('class_id');
			$data['due_date']        = $this->input->post('due_date');
			$data['created'] 		 = date('Y-m-d');

			$this->db->insert('system_dues', $data);

			redirect(base_url('index.php?admin/dashboard', refresh));
		}
	}

	function edit($id){

		$data['query'] = $this->db->get_where('system_dues', array('id' => $id))->result_array();
		$this->load->view('backend/system_dues/update_dues', $data);
	}

	function update($id){

		//$data['ID']              = $this->input->post('ID');
		$data['system_due_name'] = $this->input->post('system_due_name');
		$data['system_due_desc'] = $this->input->post('system_due_desc');
		$data['class_id']        = $this->input->post('class_id');
		$data['due_date']		 = $this->input->post('due_date');

		$this->db->where('id', $id);
        $this->db->update('system_dues', $data);

        redirect(base_url() . "index.php?/system_dues/index");
	}

	function delete($id){
		$this->db->where('id', $id);
        $this->db->delete('system_dues');

        redirect(base_url() . "index.php?/system_dues/index");
	}

	function generate_student_dues($date){
		//echo $date;

		$data['table_data'] = $this->db->get_where('system_dues', array('id' => '6'))->result_array();

		//echo "<pre>";
		//print_r($data['table_data']);
		//echo "</pre>";

		$system_dues_id   = $data['table_data']['0']['ID'];
		$system_dues_name = $data['table_data']['0']['system_due_name'];
		$due_date         = $data['table_data']['0']['due_date'];

		if ($due_date == $date) {

			$this->db->set('system_due_id', $system_dues_id);
			$this->db->set('system_due_name', $system_dues_name);
			$this->db->update('student');
		}

	}

}



?>