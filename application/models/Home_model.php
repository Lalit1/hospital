<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model{
    function __construct() {
        $this->tableName = 'home_banner';
    }
    
    /* Fetch files data from the database */
    public function getRows($id = ''){
        $this->db->select('id,file_name,uploaded_on');
        $this->db->from('home_banner');
        if($id){
            $this->db->where('id',$id);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            $this->db->order_by('uploaded_on','desc');
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result)?$result:false;
    }
    
    /*Insert file data into the database */
    public function insert($data = array()){
        $insert = $this->db->insert_batch('home_banner',$data);
        return $insert?true:false;
    }
    
    /*Add/update about us content*/
    public function add_about_content($content, $key) {
    
        /*check if table is empty or not*/
        $this->db->from('about_us');
        $isData = $this->db->get()->result_array();

        /*prepare data for update*/
        if($key == 1)
            $data['content'] = $content;
        elseif ($key == 2)
            $data['ft_img'] = $content;

        /*update content*/
        if (!empty($isData)){
            if($this->db->update('about_us', $data))
                $status = TRUE;
            else
                $status = FALSE;
        }
        /*add content*/
        else {
            if($this->db->insert('about_us', $data))
                $status = TRUE;
            else
                $status = FALSE;
        }

        return $status;
    }

    /*get content of about us page*/
    public function get_about_content() {
        $this->db->from('about_us');
        $result = $this->db->get()->result_array();

        if (!empty($result)) return $result[0];
        return FALSE;
    }
}