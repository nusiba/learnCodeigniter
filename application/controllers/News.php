<?php
class News extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url');
  }

  public function index($action='',$id=0)
  {
    switch ($action) {

      case 'insert':
        $this->news_model->insert_news($_POST);
        echo "<span style='color:green;'>Record inserted Successfully</span><br>";
        break;

      case 'update':
        $this->news_model->update_news($_POST,$id);

        echo "<span style='color:orange;'>Record was updated</span><br>";
        break;

      case 'delete':
        $this->news_model->delete_news($id);
        echo "<span style='color:red;'>Record was deleted</span><br>";
        break;

    }
    $data['news'] = $this->news_model->getNews();
    $this->load->view('news/index', $data);
  }

  public function add()
  {
    $this->load->view('news/add', []);
  }

  public function edit($id=0)
  {
    $data['new'] = $this->news_model->getNewRow($id);
    $this->load->view('news/edit', $data);
  }

  public function confirm($id)
  {
    $data['new'] = $this->news_model->getNewRow($id);
    $this->load->view('news/confirm', $data);
  }

}
