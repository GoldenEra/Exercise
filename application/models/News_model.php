<?php

/**
* this is a turial class
*/
class News_model extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE) {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('news', ['slug' => $slug]);
        var_dump($slug);
        exit;
        return $query->row_array();
    }

    public function set_news()
    {
        $this->load->helper('url');
        $slug = url_title($this->input->post('title'), 'dash', true);

        $data = [
            'title' => $this->input->post('title'),
            'slug'  => $slug,
            'text'  => $this->input->post('text')
        ];

        return $this->db->insert('news', $data);
        # code...
    }
}

 ?>
