<?php 

	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
	class Export extends CI_Controller{

		public function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->model('user_model');
			$this->load->helper('url');
		}

		public function index(){
			$users = $this->user_model->getUsers();
			$this->load->view('export',array('users'=>$users));
		}

		public function data(){
			$users = $this->user_model->getUsers();
			if(count($users)>0){

			}else{
				echo 'No data to export';
			}
		}

		
	}


?>
