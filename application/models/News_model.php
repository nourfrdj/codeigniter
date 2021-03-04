<?php
class News_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE) {
            //une requete pour chercher tous les news sans condition
            $query = $this->db->get('news');
            return $query->result_array();
        }
        //une requete pour chercher dans la table new ou le slug = la variable slug Cette variable n'a pas été declaré mais codeignier le fait automatiquement 
        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }
    public function set_news()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );

        return $this->db->insert('news', $data);
    }
}
