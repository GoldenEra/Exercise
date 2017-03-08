<?php
/**
* This is a test guide page for ci
*/
class Pages extends CI_Controller
{

    public function index()
    {
        print_r('hello');
        exit;
    }

    public function view($page = 'home')
    {
        if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }
        $data['title'] = ucfirst($page);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }

    public function about($page = 'about')
    {
        $this->load->view('pages/'.$page);
    }
}

 ?>
