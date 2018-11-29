<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function index()
    {
        $this -> load -> model('Blog_model');

        $blog_list = $this -> Blog_model -> get_blog_list();

        $this->load->view('index' , array(
            'list' => $blog_list
        ));
    }
}
