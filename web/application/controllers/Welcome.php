<?php

class Welcome extends CI_Controller {

    public function index() {
        // $this->load->view('login_page');
        redirect(site_url('admin/overview'));
    }
}

?>