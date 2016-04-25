<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                
        }

        public function index()
        {
                
                $this->load->view('update_student_profile');
        }

        public function do_upload()
        {
                
                $this->load->model('updateStudent');
                $updatedOrNot = $this->updateStudent->update_profile();
               
           if( $updatedOrNot )
           {

                $config['upload_path']          = 'userDocuments/'.$this->session->userdata('email');
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                $config['max_size']             = 2000;
                if( !file_exists($config['upload_path']))
                {
                    mkdir($config['upload_path']);
                }
            
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('userfile') && $this->upload->do_upload('userphoto'))
                {
                        $this->load->view('upload_success');
                }
                else
                {
                        $data['main_content'] = 'update_student_profile';
                        
                        $this->load->view('student_area',$data);
                }
            }
        }


        public function upload_material()
        {
            $data['main_content'] = "upload_material";
            $this->load->view("admin_area",$data);
        }

   

         public function doo_upload()
        {


            $this->load->model('updateStudent');
            $stat = $this->updateStudent->upload_mater();
            
            if($stat)
            {
                $config['upload_path']          = 'material/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                $config['max_size']             = 10000;
               

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $data['main_content'] = "upload_material";
                       $this->load->view("admin_area",$data);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }
        }
    }

}
?>