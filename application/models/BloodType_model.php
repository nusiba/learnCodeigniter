<?php
class BloodType_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function getBloodTypes()
    {
        $query = $this->db->get('news');
        return $query->result_array();
    }

    public function getBloodType($id=0)
    {
        $query = $this->db->get_where('news',['id'=>$id]);
        return $query->result_array() [0];
    }

    public function insertBloodType($post=[])
    {
        $data = [
            'title'=>$post['title'],
            'text'=>$post['text']
        ];
        $this->db->insert('news',$data);
    }

    public function updateBloodType($post = [],$id = 0){
        $data = [
          'title'=>$post['title'],
          'text'=>$post['text']
        ];
        $this->db->update('news',$data,'id='.$id);

    }

    public function deleteBloodType($id = 0){
        $this->db->delete('news',['id'=>$id]);
    }
}
