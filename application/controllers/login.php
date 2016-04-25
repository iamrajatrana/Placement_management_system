<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    if($this->session->userdata('is_logged_in'))
    {
    $is_logged_in = $this->session->userdata('is_logged_in');
    if(isset($is_logged_in) || $is_logged_in==TRUE)
   
    {
         $designation = $this->session->userdata('designation');
        if( $designation == 'admin')                                                
        {
          redirect('site/admin_area');
          die();
        }
                    
       else if( $designation == 'company')
       {
        redirect('site/organisation_area');
        die();
       }
        else if($designation == 'student')
        {
          redirect('site/student_area');
          die();
        }
    }

    }
   
  }

	public function index()
	{
           $data['main_content'] = 'login_form';
		$this->load->view('includes/template',$data);
	}

    
    
     function validate_credentials()
     {
           $this->load->model('member_model'); 
           $validornot = $this->member_model->validate();
           
           $designation = $this->input->post('designation');
          if( $validornot)
           {
                $validornot = explode('-',$validornot);
                
                $data = array(
                                'user' =>$validornot[0],
                                'firstComer' => $validornot[1],
                                'is_logged_in' =>true,
                                'designation'=> $designation,
                                 'email' => $this->input->post('username')
);
               $this->session->set_userdata($data);  
               if( $designation == 'admin')                                                

                    redirect('site/admin');
               else if( $designation == 'company')
                    redirect('site/organisation_area');
               else if($designation == 'student')
                    redirect('site/student_area');

                                          
           }
else{
      $this->index();
      echo "Error";
}
                }
}

?>
