<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MX_Controller {
    public function index()
    {
        $this->load->view('users_view');
    }
}


