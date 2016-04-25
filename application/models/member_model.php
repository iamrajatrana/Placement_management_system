<?php

 class Member_model extends CI_Model
 {
       function validate()
       {
           $designation   = $this->input->post('designation');
           $username      = $this->input->post('username');
           $pass          = $this->input->post('password');
           $pass          = md5($pass);
           if( $username == '' || $pass == '' || $designation == '')
  
           {
                echo "Sorry ...Couln't process request .. Try later Plz or try to connect to     admin";
           }
           else
           {
            
             if( $designation == 'admin' )
             {
                  
               $query = $this->db->query("Select name,phone from admindbplac where email='$username' and passkey = '$pass'");
 if($query->num_rows() == 1)
{
    foreach ($query->result() as $row)
    {
                return $row->name.'-'.$row->phone;
    }        

}
   }
           else if($designation == 'company')
           {
                
               $query = $this->db->query("Select name,phone from companydbplac where email='$username' and password = '$pass'");

 if($query->num_rows() == 1)
{
    foreach ($query->result() as $row)
    {
                   
                return $row->name.'-'.$row->phone;
    }        

}

           }
           else if($designation == 'student')
           {
                  
               $query = $this->db->query("Select name,phone from studdbplac where email='$username' and passkey = '$pass'");
 if($query->num_rows() == 1)
{
    foreach ($query->result() as $row)
    {
                return $row->name.'-'.$row->phone;
    }        

}

           }


       }
     }
 }

?>