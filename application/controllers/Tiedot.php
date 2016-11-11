<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiedot extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Tiedot_model');
    }

	public function naytaTiedot() {
		
		$data['asiakkaat']=$this->Tiedot_model->getTiedot();
		
		$data['sivun_sisalto']="Tiedot/naytaTiedot";
		$this->load->view('menu/valikko',$data);
	}
}