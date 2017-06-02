<?php
class BloodType extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
        $this->load->model('BloodType_model');
        $this->load->helper('url');
  }

  public function index($action='',$id=0)
  {
    switch ($action) {

      case 'insert':
        $this->BloodType_model->insertBloodType($_POST);
        echo "<span style='color:green;'>Record inserted Successfully</span><br>";
        break;

      case 'update':
        $this->BloodType_model->updateBloodType($_POST,$id);
        echo "<span style='color:orange;'>Record was updated</span><br>";
        break;

      case 'delete':
        $this->BloodType_model->deleteBloodType($id);
        echo "<span style='color:red;'>Record was deleted</span><br>";
        break;

    }
    $data['bloodTypes'] = $this->BloodType_model->getBloodTypes();
    $this->load->view('BloodType/index', $data);
  }

  public function add()
  {
    $this->load->view('BloodType/add', []);
  }

  public function edit($id=0)
  {
    $data['new'] = $this->BloodType_model->getBloodType($id);
    $this->load->view('BloodType/edit', $data);
  }

  public function confirm($id)
  {
    $data['new'] = $this->BloodType_model->getBloodType($id);
    $this->load->view('BloodType/confirm', $data);
  }

}
