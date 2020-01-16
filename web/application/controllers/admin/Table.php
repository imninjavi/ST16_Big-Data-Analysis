<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("bdata_model");
    }

    public function index()
    {
        $data["bdata"] = $this->bdata_model->limitData();
        $this->load->view("admin/table", $data);
    }
}