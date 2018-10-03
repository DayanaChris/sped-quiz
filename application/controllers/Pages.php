<?php
  class Pages extends CI_Controller{


    public function levels($id){
      $data = array(
        'level' => $this->db->get_where('level'),
        'category_id' => $id,

      );
      $this->load->view('templates/temp_lessons');
      $this->load->view('levels',$data);
    }


    public function sing_vid_menu(){
      $this->load->view('sing_vid_menu');
    }







  }
