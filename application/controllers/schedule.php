<?php

 class Schedule extends CI_Model
 {
       public function __construct()
       {
           parent::__construct();
           $this->load->model('get_schedule');
       }

       public function index()
       {
       	  $data['sql'] = $this->get_schedule->get_list();
          $this->load->view(admin_area);
       }
 }

?>