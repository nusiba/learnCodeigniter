<?php
class News_model extends CI_Model {
  public function __construct()
  {
    $this->load->database();
  }

  public function getNews($slug = FALSE)
  {
    $query = $this->db->get('news');
    return $query->result_array();
  }

  public function getNewRow($id=0)
  {
    $query = $this->db->get_where('news',['id'=>$id]);
    return $query->result_array() [0];
  }

public function insert_news($post=[])
{var_dump($post);
  $data = [
    'title'=>$post['title'],
    'text'=>$post['text']
  ];
  $this->db->insert('news',$data);

}
  public function update_news($post = [],$id = 0){
    $data = [
      'title'=>$post['title'],
      'text'=>$post['text']
    ];
    $this->db->update('news',$data,'id='.$id);

  }

  public function delete_news($id = 0){
    $this->db->delete('news',['id'=>$id]);
  }
}
