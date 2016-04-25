<?php

 class Student extends CI_Model
 {
 	function qualified_company()
 	{
 		$this->load->model('comp_model');
 		$data['sql']  = $this->comp_model->apply_to();
 		$this->load->view('qualified_company',$data);
 	}

 	function apply_now($comp_id,$job_id,$why,$name)
 	{
          
    	   $email = $this->session->userdata('email');
           $this->db->where('email',$email);
       	   $data = $this->db->get('studdbplac');
       	   foreach ($data->result() as $obj) {
       	   	   $roll =  $obj->rollno;

       	   }
           

       	   

       	   $data = array(
                 'company_id' => $comp_id ,
                  'job_id' => $job_id ,
                  'student_id' => $roll,
                  'why_join'=>$why,
                  'name'=>$name
                 );

          $ans = $this->db->insert('job_application', $data); 
          if( $ans)
          { 
          	$data['status'] = "Applied Successfully";
          	 $this->load->view('application_status',$data);

          }
          else
          {
          	 $data['status'] = "Failed..Try Later";
          	 $this->load->view('application_status',$data);
          }

       
    
 	}


  function add_student($name,$mail,$pass,$roll)
  {
       $data = array(
                  
                  'name'=>$name,
                  'email' =>$mail,
                  'passkey'=>md5($pass),
                  'rollno'=>$roll
                 );

          return $this->db->insert('studdbplac', $data);
  }


     function add_recruiter($id,$name,$mail,$pass)
  {
       $data = array(
                  'companyID'=>$id,
                  'name'=>$name,
                  'email' =>$mail,
                  'password'=>md5($pass)
                 );

          return $this->db->insert('companydbplac', $data);
  }



  

    function ask_query_admin_student($name,$ask,$sub,$email)
    {

         $data = array(
                  
                  'name'=>$name,
                  'email' =>$email,
                  'subject'=>$sub,
                  'query'=>$ask
                 );

          return $this->db->insert('student_admin_message', $data);
          
    }

    function show_query()
    {
       return $this->db->query("select * from student_admin_message where status='Not Replied' order by date desc");
    }


    function show_query_ans()
    {
      $email = $this->session->userdata('email');
      $query = "select * from student_admin_message where status='Replied' and email='".$email."' "."order by date desc";
       return $this->db->query($query);
    }

      function show_query_ans_recuiter()
    {
      $email = $this->session->userdata('email');
      $query = "select * from recuiter_admin_message where status='Replied' and email='".$email."' "."order by date desc";
       return $this->db->query($query);
    }

   function reply($query_id,$reply)
   {
      $data=array( 'reply_from_admin'=>$reply, 'status'=>'Replied');
      $this->db->where('query_id',$query_id);
      return $this->db->update('student_admin_message',$data);
   }

   function dont_show($id)
   {
      $data=array( 'status'=>'Replied');
      $this->db->where('query_id',$id);
      return $this->db->update('student_admin_message',$data);
   }

       function dont_show_2($id)
         {
            $data=array( 'status'=>'Replied');
            $this->db->where('query_id',$id);
            return $this->db->update('recuiter_admin_message',$data);
         }

   function get_material()
   {
       $query = "select * from material";
       return $this->db->query($query);
   }
 }

?>