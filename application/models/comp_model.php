<?php

 class Comp_model extends CI_Model
 {

    function get_comp_info()
    {
    	$email = $this->session->userdata('email');
    	$this->db->where('email',$email);
        return $this->db->get('companydbplac');

    }

    function comp_info()
    {
    	   $email = $this->session->userdata('email');
           $this->db->where('email',$email);
       	   return $this->db->get('companydbplac');
       
    }

    function edit_finally($data)
    {
    	$email = $this->session->userdata('email');
    	$this->db->where('email',$email);
        $this->db->update('companydbplac',$data);
    }

   function comp_pass($old,$new)
   {
   	   $email = $this->session->userdata('email');
    	$this->db->where('email',$email);
        $data = $this->db->get('companydbplac');
        foreach ($data->result() as $key => $obj) {
        	$oldpassword = $obj->password;
        }
        if($oldpassword == md5($old))
        {
        	$data = array(
        		       'password'=>$new
        		       );
             $this->db->where('email',$email);
             $this->db->update('companydbplac',$data);

        }
   }


   function edit_time($data)
   {
   	    $email = $this->session->userdata('email');
    	$this->db->where('email',$email);
        $this->db->update('companydbplac',$data);
   }

   function apply_to()
   {
       $email = $this->session->userdata('email');
       $this->db->where('email',$email);
       $dataa = $this->db->get('studdbplac');
       foreach ($dataa->result() as $obj) {
         $stu_cg = $obj->CGPI_req;
         
       }
       $query = "select companyID,job_id,name,CGPI_req,branch,available_post from companydbplac where CGPI_req <=".$stu_cg;
       $data  = $this->db->query($query);

       return $data;
   }

   function view_apps()
   {
        $email = $this->session->userdata('email');
        $this->db->where('email',$email);
        $sql = $this->db->get('companydbplac');
        foreach ($sql->result() as $obj) {
          $id = $obj->companyID;
        }
        $query1 = "select name,student_id from job_application where company_id=".$id;
        
        return  $this->db->query($query1);
        
   }


   function see_profile($roll)
   {
        $query = "Select rollno,name,college,email,phone,aboutyou,skills,branch,CGPI_req from studdbplac where rollno = ".$roll;
        return $this->db->query($query);
   }


   function whether_applied()
   {
       $query = "Select student_id,company_id,job_id from job_application";
        return $this->db->query($query);
   }


     function ask_query_admin_company($name,$ask,$sub,$email)
    {

         $data = array(
                  
                  'name'=>$name,
                  'email' =>$email,
                  'subject'=>$sub,
                  'query'=>$ask
                 );

          return $this->db->insert('recuiter_admin_message', $data);
          
    }

     function show_query()
    {
       return $this->db->query("select * from recuiter_admin_message where status='Not Replied' order by date desc");
    }

    function reply($query_id,$reply)
   {
      $data=array( 'reply'=>$reply, 'status'=>'Replied');
      $this->db->where('query_id',$query_id);
      return $this->db->update(' recuiter_admin_message',$data);
   }


 }

 ?>