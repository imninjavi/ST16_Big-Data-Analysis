<?php

class Overview extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->model("bdata_model");
        if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
	}

    public function index() {

        $data["bdata"] = $this->bdata_model->fetchData();
        $data["jml_negara"] = $this->bdata_model->getCountry();
        $this->load->view('admin/overview', $data);
    }
}

?>