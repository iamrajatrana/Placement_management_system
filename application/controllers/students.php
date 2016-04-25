<?php

 class Students extends CI_Controller
 {
 	function qualified_company()
 	{
 		$this->load->model('comp_model');
  		
 		$data['sql']  = $this->comp_model->apply_to();
 		$this->load->view('qualified_company',$data);
 	}

 	function apply_now($comp,$job)
  	{
  		$why = $this->input->post('why');
  		$name = $this->input->post('name');
   		$this->load->model('student');
 	    $this->student->apply_now($comp,$job,$why,$name);

 	}

 	function add_now()
 	{
 		$mail = $this->input->post('mail');
  		$name = $this->input->post('name');
   $roll = $this->input->post('roll');
  		$pass = $this->input->post('pass');
 		$this->load->model('student');
 		$data['status'] = $this->student->add_student($name,$mail,$pass,$roll);
 		$this->load->view('status',$data);
 	}


    	function add_now2()
 	{
 		$id = $this->input->post('id');
 		$mail = $this->input->post('mail');
  		$name = $this->input->post('name');
   
  		$pass = $this->input->post('pass');
 		$this->load->model('student');
 		$data['status'] = $this->student->add_recruiter($id,$name,$mail,$pass);
 		$this->load->view('status',$data);
 	}



   function ask_query()
   {
       $name= $this->input->post('name');
       $ask = $this->input->post('ask');
       $sub = $this->input->post('subject');
       $email = $this->session->userdata('email');

       $this->load->model('student');
       $sent = $this->student->ask_query_admin_student($name,$ask,$sub,$email);
       if( $sent )
       {

       $data['sent'] =$sent;
       $this->load->view('messegeSent',$data);
       }
       else
       {
        echo "Cannot Send msg now. Try Later";
       }
   }

   function reply_to_student_query($query_id)
   {
      $reply = $this->input->post('reply');
      $this->load->model('student');
      if($this->student->reply($query_id,$reply))
      {
        redirect('site/view_student_message');
      }
     
   }


   function reply_to_recruiter_query($query_id)
   {
        $reply = $this->input->post('reply');
      $this->load->model('comp_model');
      if($this->comp_model->reply($query_id,$reply))
      {
        redirect('site/view_recruiter_message');
      }
   }

   function dont_show($id)
   {

       $this->load->model('student');
      if($this->student->dont_show($id))
      {
        redirect('site/view_student_message');
      }
   }
    

     function dont_show_2($id)
   {

       $this->load->model('student');
      if($this->student->dont_show_2($id))
      {
        redirect('site/view_student_message');
      }
   }
 }

?>
