<?php
 
class Home extends CI_Controller {
    
    function __construct()
    {
    	parent::__construct();
    	$this->load->model('comp_model');
    }
    function view_profile()
    {
    	$data['sql'] = $this->comp_model->get_comp_info();
    	$this->load->view('comp_profile',$data);

    }

    function edit_profile()
    {
    	$data['sql'] = $this->comp_model->comp_info();
    	$this->load->view("edit_company_profile",$data);
    	
    }

    function edit_profile_to()
    {
    	$name = $this->input->post('name');
    	$phone = $this->input->post('phone');
    	$email = $this->input->post('email');
    	$cg = $this->input->post('cg');
    	$post = $this->input->post('post');
    	$branch = $this->input->post('branch');
    	$about = $this->input->post('about');
            
            $data = array(
                      'name' =>$name,
                      'phone' =>$phone,
                      'email' =>$email,
                      'CGPI_req' =>$cg,
                      'branch' =>$branch,
                      'available_post' =>$post,
                      
                      'about' =>$about

            	);

              $this->comp_model->edit_finally($data);
               $data['main_content'] = 'organisation_content';
         
                  $this->load->view('organisation_area',$data);
     
    }

    function change_password()
    {
    	
    	$this->load->view("edit_company_password");

    }

    function change_password_to()
    {

    	$oldpass = $this->input->post('opassword');
    	$newpass = $this->input->post('npassword');
    	$new1pass = $this->input->post('n1password');
        if($newpass != $new1pass)
        {
        	echo "Password Mismatch";
        }
        else
        {
        	 $this->comp_model->comp_pass($oldpass,md5($newpass));
        	 redirect("site/organisation_area");
        }
    	



    }


    function interview_details()
    {
        $data['sql'] = $this->comp_model->comp_info();
    	$this->load->view("interview_details",$data);
    }



    function change_interview_details()
    {
    	$d1 = $this->input->post('date');
    	$d2 = $this->input->post('time');
    	$d3 = $this->input->post('venue');
    	$d4 = $this->input->post('add');
    	$d5 = $this->input->post('inter_date');
    	$d6 = $this->input->post('inter_time');
    	$d7 = $this->input->post('inter_venue');
    	$d8 = $this->input->post('addr');

        $data = array(
                    'exam_date' => $d1,
                    'exam_time' => $d2,
                    'exam_venue' => $d3,
                    'exam_address' => $d4,
                    'interview_date' => $d5,
                    'interview_time' => $d6,
                    'interview_venue' => $d7,
                    'interview_address' => $d8
                    

        	);

              $this->comp_model->edit_time($data);
              redirect('site/organisation_area');
       
    }


    function view_applications()
    {
         $data['sql'] = $this->comp_model->view_apps();
         
        $this->load->view("enrollments",$data);
    }



    function see_profile($roll)
    {
        $data['sql'] = $this->comp_model->see_profile($roll);
        $this->load->view("profile",$data);
    }

      function ask_query()
   {
       $name= $this->input->post('name');
       $ask = $this->input->post('ask');
       $sub = $this->input->post('subject');
       $email = $this->session->userdata('email');

    
       $sent = $this->comp_model->ask_query_admin_company($name,$ask,$sub,$email);
       if( $sent )
       {
           $this->load->view('messegeSent');
       }
   }
}

?>