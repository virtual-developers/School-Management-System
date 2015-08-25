<?php 

Class System_dues extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function index(){

		$query = $this->db->get('system_dues');
		$page_data['query'] = $query->result_array();

		//$this->load->view('backend/system_dues/show', $data);

		$page_data['page_name']  = '../system_dues/index';
        $page_data['page_title'] = get_phrase('System Dues');
        $this->load->view('backend/index', $page_data);
	}

	function add($param = ""){        
		
		if ($param == 'create'){
			$data['system_due_name'] = $this->input->post('system_due_name');
			$data['system_due_desc'] = $this->input->post('system_due_desc');
			$data['class_id']        = $this->input->post('class_id');
			$data['due_date']        = $this->input->post('due_date');
			$data['created'] 		 = date('Y-m-d');

			$this->db->insert('system_dues', $data);

			redirect(base_url('index.php?System_dues/index', refresh));
		}
//		$this->load->view('backend/system_dues/system_dues');
		$page_data['page_name']  = '../system_dues/system_dues';
        $page_data['page_title'] = get_phrase('admin_dashboard');
        $this->load->view('backend/index', $page_data);

	}

	function edit($id){

		$data['query'] = $this->db->get_where('system_dues', array('id' => $id))->result_array();
		$this->load->view('backend/system_dues/modal_due_edit', $data);
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

	function generate_student_dues(){
		//echo $date;

		$current_date = date('Y-m-d');

		$data = $this->db->get_where('system_dues', array('due_date' => $current_date))->result_array();

		//echo "<pre>";
		//print_r($data['table_data']);
		//echo "</pre>";

		foreach ($data as $row) {
			$system_dues_id   = $row['ID'];
			$system_dues_name = $row['system_due_name'];
			$due_date         = $row['due_date'];
			# code...
		

		// $system_dues_id   = $data['table_data']['ID'];
		// $system_dues_name = $data['table_data']['system_due_name'];
		// $due_date         = $data['table_data']['due_date'];

		// if ($due_date == $date) {

			$this->db->set('system_due_id', $system_dues_id);
			$this->db->set('system_due_name', $system_dues_name);
			$this->db->update('student');
		// }
			}

	}

}



?>